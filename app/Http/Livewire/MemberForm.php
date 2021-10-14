<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Branch;
use Livewire\WithFileUploads;
use App\Models\Member;
use App\Models\Course;
use App\Models\Division;
use App\Models\District;
use App\Models\Upozilla;
use App\Models\Qualification;
use App\Models\Duration;

class MemberForm extends Component
{
    use WithFileUploads;

    public $firstName;
    public $lastName;
    public $fatherName;
    public $motherName;
    public $gender;
    public $mobile;
    public $nid;
    public $birthOfDate;
    public $presentDivision;
    public $presentDistrict;
    public $presentUpozilla;
    public $presentPostOffice;
    public $presentPostCode;
    public $village;
    public $courseName;
    public $duration;
    public $branch;
    public $checkAddress;
    public $permanentDivision;
    public $permanentDistrict;
    public $permanentUpozilla;
    public $permanentPostOffice;
    public $permanentPostCode;
    public $photo;
    public $signature;
    public $qualification = [];
    public $transectionId;
    
    public $bikashNumber;

    public $totalStep = 4;
    public $currentStep = 1;

    public function decreaseStep(){
         $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function increaseStep(){
       $this->resetErrorbag();
       $this->validateDate();

       $this->currentStep++;
        if($this->currentStep > $this->totalStep){
            $this->currentStep = $this->totalStep;
        }
    
    }
    public function mount(){
        $this->currentStep = 1;
    }
  
    public $districts;
    public $upozillas;
    public $permanentDistricts;
    public $permanentUpozillas;
    public $branches;

    public function render()
    {
        $divisions = Division::all();
        //$branches = Branch::all();
        $permanentDivisions = Division::all();
        $qualifications = Qualification::all();
        $courses = Course::all();
        $durations = Duration::all();

        return view('livewire.member-form',compact('divisions', 'permanentDivisions', 'qualifications', 'courses','durations'));
    }

    public function updatedPresentDivision($id){

        $this->districts = District::where('division_id', $id)->get();

    }
    public function updatedPresentDistrict($id){

        $this->upozillas = Upozilla::where('district_id', $id)->get();
        $this->branches = Branch::where('district_id', $id)->get();

    }
    public function updatedPermanentDivision($id){

        $this->permanentDistricts = District::where('division_id', $id)->get();

    }
    public function updatedPermanentDistrict($id){

        $this->permanentUpozillas = Upozilla::where('district_id', $id)->get();

    }

     public function validateDate(){

         if($this->currentStep == 1){

                 $this->validate([
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'fatherName' => 'required|string',
                'motherName' => 'required|string',
                'gender' => 'required|string',
                'mobile' => 'required',
                'nid' => 'required|string',
                'birthOfDate' => 'required',
            ]);    

        }elseif($this->currentStep == 2){

                 $this->validate([
                'presentDivision' => 'required',
                'presentDistrict' => 'required',
                'presentUpozilla' => 'required',
                'presentPostOffice' => 'required',
                'presentPostCode' => 'required',
                'village'         => 'required',
                'branch' => 'required',
                'courseName' => 'required',
                'duration' =>'required',
              
            ]);   

        }elseif($this->currentStep == 3 && empty($this->checkAddress)){
            
             $this->validate([
                'permanentDivision' => 'required',
                'permanentDistrict' => 'required',
                'permanentUpozilla' => 'required',
                'permanentPostOffice' => 'required',
                'permanentPostCode' => 'required',
               
            ]);   
        } 
    } 

    public function register(){

        if($this->currentStep == 4){

              $this->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
                'signature' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
                'qualification' => 'required',
                'transectionId' => 'required',
                'bikashNumber' => 'required'
            ]);   
            
            $this->photo->storeAs('public', time().'_photo_'.'.'.$this->photo->getClientOriginalExtension());
            $this->signature->storeAs('public', time().'_signature_'.'.'.$this->signature->getClientOriginalExtension());
  

            $image = time().'_photo_'.'.'.$this->photo->getClientOriginalExtension();
            $signature =   time().'_signature_'.'.'.$this->signature->getClientOriginalExtension();

           

         if(!empty($this->checkAddress)){
               
            $this->permanentDivision = $this->presentDivision;
            $this->permanentDistrict = $this->presentDistrict;
            $this->permanentUpozilla = $this->presentUpozilla;
            $this->permanentPostOffice = $this->presentPostOffice;
            $this->permanentPostCode = $this->presentPostCode;
   
         }

         $data = [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'fatherName' => $this->fatherName,
            'motherName' => $this->motherName,
            'gender' =>$this->gender,
            'mobile' =>$this->mobile,
            'nid' =>$this->nid,
            'birthOfDate' => $this->birthOfDate,
            'presentDivision_id' => $this->presentDivision,
            'presentDistrict_id' => $this->presentDistrict,
            'presentUpozilla_id' => $this->presentUpozilla,
            'presentPostOffice' => $this->presentPostOffice,
            'presentPostCode' => $this->presentPostCode,
            'village'         =>$this->village,
            'branch_id' => $this->branch,
            'course_id' => $this->courseName,
            'duration_id' => $this->duration,
            'checkAddress' => $this->checkAddress,
            'permanentDivision_id' => $this->permanentDivision,
            'permanentDistrict_id' => $this->permanentDistrict,
            'permanentUpozilla_id' => $this->permanentUpozilla,
            'permanentPostOffice' => $this->permanentPostOffice ,
            'permanentPostCode' => $this->permanentPostCode,
            'photo' => $image,
            'signature' => $signature,
            'qualification' =>json_encode($this->qualification),
            'transectionId' => $this->transectionId,
            'bikas_number' => $this->bikashNumber,
            'status' => 0
        ];

        Member::create($data);
        session()->flash('message', 'Your Registaration request is pending, after checking your Transection ID,
        your Registration will be confirmed and will be given a Registration ID via SMS, Thank You');
        $this->reset();
        $this->currentStep = 1;  

        }

    }
}

