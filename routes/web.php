<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
use App\Http\Controllers\StressLevelController;
use App\Http\Controllers\AppointmentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::get('/dashboard',[AdminController::class,'dashboard']);

Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/laboratory', [HomeController::class, 'laboratory'])->name('labappointment');

Route::post('/labappointments',[HomeController::class,'labappointments']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/doctor',[HomeController::class,'doctor']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/adapproved/{id}',[AdminController::class,'approved']);

Route::get('/adcanceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/counselling', [HomeController::class, 'counselling'])->name('counselling');

Route::post('/counselling', 'CounsellingController@processForm');

Route::get('/about_us', [HomeController::class, 'about_us'])->name('about_us');

Route::get('/contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::post('/contact_us', [HomeController::class, 'submitForm']);

// Route::post('/inquiries', 'HomeController@inquiries')->name('inquiries');

Route::get('/add_labassistant',[AdminController::class,'addlabassistant']);

Route::post('/upload_labassistant',[AdminController::class,'uploadlab']);

Route::get('/add_pharmacist',[AdminController::class,'addpharmacist']);

Route::post('/upload_pharmacist',[AdminController::class,'uploadpharmacist']);

Route::get('/dapproved/{id}',[DoctorController::class,'doctorapproved']);

Route::get('/dcanceled/{id}',[DoctorController::class,'doctorcanceled']);


Route::post('/dapproved/{id}',[DoctorController::class,'doctorapproved']);

Route::post('/dcanceled/{id}',[DoctorController::class,'doctorcanceled']);



Route::post('/prescription',[DoctorController::class,'prescription'])->name('sendToPharmacyButton');

Route::get('/appointment_view',[DoctorController::class,'appointmentview']);
Route::get('/appointment_view', [DoctorController::class, 'showAppointments']);

Route::get('/prescription_view/{id}/{name}', [DoctorController::class, 'prescription_view'])->name('doctor.prescription');

Route::post('/sendemail/{id}', [DoctorController::class, 'sendemail'])->name('sendemail');

Route::get('/viewprescription', [PharmacyController::class, 'viewprescription']);

Route::get('/prescription',[PharmacyController::class,'prescription']);

Route::get('/sendprescription/{id}', [PharmacyController::class, 'sendPrescription'])->name('sendprescription.get');
Route::post('/sendprescription/{id}', [PharmacyController::class, 'sendPrescription'])->name('sendprescription.post');

Route::get('/labappointment', [LabController::class, 'labappointment'])->name('labappointment');

Route::get('/approved/{id}',[LabController::class,'labapproved']);

Route::get('/canceled/{id}',[LabController::class,'labcanceled']);

Route::get('get-doctors', [AdminController::class, 'getDoctors']);
Route::get('get-time-slots', [AppointmentController::class, 'getTimeSlots']);

Route::get('/game1', function () {
    return view('game1.index1');
});

Route::get('/game2', function () {
    return view('game2.index2');
});

Route::post('/inquiries', [HomeController::class, 'submitForm'])->name('inquiries');

Route::get('/labhome',[LabController::class,'labhome']);

Route::get('/report/summary', [ReportController::class, 'summary']);

Route::get('/report/stress_summary', [ReportController::class, 'stressSummary']);

Route::get('/showappointment', [AdminController::class, 'showAppointment']);

Route::get('/add_timeslot', [DoctorController::class, 'create']);

Route::post('/add_timeslot', [DoctorController::class, 'store'])->name('doctor.add_timeslot');

Route::post('/save-stress-level', [StressLevelController::class, 'store'])->name('saveStressLevel');


Route::get('/add_timeslot', [DoctorController::class, 'showManageTimeslots'])->name('doctor.add_timeslot');

Route::post('/dapproved/{id}', [DoctorController::class, 'approveAppointment']);

// connecting to the database
$conn = mysqli_connect("localhost", "root", "26918", "easyvisit_new") or die("Database Error");

if (request()->isMethod('post') && isset($_POST["text"])) {
    // getting user message through AJAX
    $getMesg = mysqli_real_escape_string($conn, $_POST["text"]);

    // checking user query to database query
    $check_data = "SELECT answer FROM chatbot WHERE question LIKE '%$getMesg%'";
    $run_query = mysqli_query($conn, $check_data) or die("Error");

    // if the user query matched the database query, show the reply; otherwise, go to the else statement
    if (mysqli_num_rows($run_query) > 0) {
        // fetching replay from the database according to the user query
        $fetch_data = mysqli_fetch_assoc($run_query);
        // storing replay to a variable which we'll send to AJAX
        $replay = $fetch_data['answer'];
        echo $replay;
    } else {
        echo "Sorry can't be able to understand you!";
    }
    exit(); // Stop further execution to avoid rendering HTML below
}
?>










