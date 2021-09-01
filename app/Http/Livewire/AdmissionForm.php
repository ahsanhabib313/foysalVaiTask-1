<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Student;

class AdmissionForm extends Component
{
    use WithFileUploads;

    public $firstName;
    public $lastName;
    public $fatherName;
    public $motherName;
    public $email;
    public $gender;
    public $mobile;
    public $nid;
    public $birthCertificate;
    public $birthOfBirth;
    public $presentDivision;
    public $presentDistrict;
    public $presentUpozilla;
    public $presentPostOffice;
    public $presentPostCode;
    public $presentBranchName;
    public $checkAddress;
    public $permanentDivision;
    public $permanentDistrict;
    public $permanentUpozilla;
    public $permanentPostOffice;
    public $permanentPostCode;
    public $photo;
    public $signature;
    public $qualification;

    public $totalStep = 4;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.admission-form');
    }

    public function decreaseStep(){

        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function increaseStep(){

        $this->currentStep++;
        if($this->currentStep > $this->totalStep){
            $this->currentStep = $this->totalStep;
        }
    }

    public function validateDate(){

        if($this->currentStep == 1){
            $this->validate([
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'fatherName' => 'required|string',
                'motherName' => 'required|string',
                'email' => 'required|unique:students',
                'gender' => 'required|string',
                'mobile' => 'required',
                'nid' => 'required|string',
                'birthCertificate' => 'required|string',
                'birthOfBirth' => 'required|',

            ]);

        }elseif($this->currentStep == 2){

        }elseif($this->currentStep == 3){

        }

    }

    public function register(){

    }
}
