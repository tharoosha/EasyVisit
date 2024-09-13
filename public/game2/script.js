
    document.addEventListener("DOMContentLoaded", function() {
        const puzzleContainer = document.getElementById("puzzle-container");
        const pieces = createPuzzlePieces();

        shuffleArray(pieces);

        pieces.forEach((piece, index) => {
            const puzzlePiece = document.createElement("div");
            puzzlePiece.classList.add("puzzle-piece");
            puzzlePiece.textContent = piece;
            puzzlePiece.addEventListener("click", () => handlePieceClick(index));

            puzzleContainer.appendChild(puzzlePiece);
        });

        function createPuzzlePieces() {
            const pieces = [];
            for (let i = 1; i <= 8; i++) {
                pieces.push(i);
            }
            pieces.push(null); // Representing the empty space
            return pieces;
        }

        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        }

        function handlePieceClick(index) {
            const emptyIndex = pieces.indexOf(null);
            if (isAdjacent(index, emptyIndex)) {
                [pieces[index], pieces[emptyIndex]] = [pieces[emptyIndex], pieces[index]];
                updatePuzzle();
                if (isSolved()) {
                    showWinMessage();
                    restartGame();
                }
            }
        }

        function isAdjacent(index1, index2) {
            const row1 = Math.floor(index1 / 3);
            const col1 = index1 % 3;
            const row2 = Math.floor(index2 / 3);
            const col2 = index2 % 3;

            return (
                (Math.abs(row1 - row2) === 1 && col1 === col2) ||
                (row1 === row2 && Math.abs(col1 - col2) === 1)
            );
        }

        function updatePuzzle() {
            const puzzlePieces = document.querySelectorAll(".puzzle-piece");
            puzzlePieces.forEach((piece, index) => {
                piece.textContent = pieces[index];
            });
        }

        function isSolved() {
            return pieces.every((piece, index) => piece === null || piece === index + 1);
        }

        function showWinMessage() {
            alert("Congratulations! You solved the puzzle!");
        }

        function restartGame() {
            pieces.forEach((piece, index) => {
                puzzleContainer.removeChild(puzzleContainer.childNodes[index]);
            });

            const newPieces = createPuzzlePieces();
            shuffleArray(newPieces);

            newPieces.forEach((piece, index) => {
                const puzzlePiece = document.createElement("div");
                puzzlePiece.classList.add("puzzle-piece");
                puzzlePiece.textContent = piece;
                puzzlePiece.addEventListener("click", () => handlePieceClick(index));

                puzzleContainer.appendChild(puzzlePiece);
            });

            pieces.length = 0;
            pieces.push(...newPieces);
        }
    });
    function showWinMessage() {
        document.getElementById("win-screen").style.display = "block";
    }
    
    function restartGame() {
        document.getElementById("win-screen").style.display = "none";
        location.reload();
        const puzzleContainer = document.getElementById("puzzle-container");
        
        // Remove existing puzzle pieces
        while (puzzleContainer.firstChild) {
            puzzleContainer.removeChild(puzzleContainer.firstChild);
        }
    
        // Create and shuffle new puzzle pieces
        const pieces = createPuzzlePieces();
        shuffleArray(pieces);
    
        // Generate puzzle pieces
        pieces.forEach((piece, index) => {
            const puzzlePiece = document.createElement("div");
            puzzlePiece.classList.add("puzzle-piece");
            puzzlePiece.textContent = piece;
            puzzlePiece.addEventListener("click", () => handlePieceClick(index));
    
            puzzleContainer.appendChild(puzzlePiece);
        });
    }
    
    
    