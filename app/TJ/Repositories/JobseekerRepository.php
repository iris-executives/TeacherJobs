<?php namespace TJ\Repositories;

use TJ\Entities\JobSeeker;
use TJ\Contacts\JobSeekerInterface;

class JobSeekerRepository implements Contracts\JobSeekers\Repositories\JobSeekerRepositoryInterface {

    /**
     * @var TJ\Entities\JobSeeker
     */
    protected $jobseeker;
    
    public function __construct(JobSeekerInterface $employer)
    { 
        $this->jobseeker = $jobseeker;
    }
    
     public function create($user_id,
                            $gender,
                            $residence,
                            $city_live_in,
                            $city_work_in,
                            $mobile1,
                            $mobile2,
                            $dob,
                            $primary_language, 
                            $secondary_language,
                            $will_relocate,
                            $is_anonyous,
                            $picture,
                            $employment_status,
                            $work_experience,
                            $sector_most_experience,
                            $other_sector1,
                            $other_sector2,
                            $awards,
                            $achievements,
                            $recognitions,
                            $education_level,
                            $graduation_date,
                            $ongoing_education,
                            $graduation_date2,
                            $pro_certifications,
                            $ongoing_certifications,
                            $has_managed_others,
                            $notice_period,
                            $is_registered,
                            $is_subscribed_newsletter)
    {
        return $this->jobseeker->create(compact([   "user_id",
                                                    "gender",
                                                    "residence",
                                                    "city_live_in",
                                                    "city_work_in",
                                                    "mobile1",
                                                    "mobile2",
                                                    "dob",
                                                    "primary_language", 
                                                    "secondary_language",
                                                    "will_relocate",
                                                    "is_anonyous",
                                                    "picture",
                                                    "employment_status",
                                                    "work_experience",
                                                    "sector_most_experience",
                                                    "other_sector1",
                                                    "other_sector2",
                                                    "awards",
                                                    "achievements",
                                                    "recognitions",
                                                    "education_level",
                                                    "graduation_date",
                                                    "ongoing_education",
                                                    "graduation_date2",
                                                    "pro_certifications",
                                                    "ongoing_certifications",
                                                    "has_managed_others",
                                                    "notice_period",
                                                    "is_registered",
                                                    "is_subscribed_newsletter"
      ]));
    }
    
    public function update( $id,
                            $user_id,
                            $gender,
                            $residence,
                            $city_live_in,
                            $city_work_in,
                            $mobile1,
                            $mobile2,
                            $dob,
                            $primary_language, 
                            $secondary_language,
                            $will_relocate,
                            $is_anonyous,
                            $picture,
                            $employment_status,
                            $work_experience,
                            $sector_most_experience,
                            $other_sector1,
                            $other_sector2,
                            $awards,
                            $achievements,
                            $recognitions,
                            $education_level,
                            $graduation_date,
                            $ongoing_education,
                            $graduation_date2,
                            $pro_certifications,
                            $ongoing_certifications,
                            $has_managed_others,
                            $notice_period,
                            $is_registered,
                            $is_subscribed_newsletter)
    {
        return $this->jobseeker->where($this->jobseeker->getKeyName(), $id)
                                ->update(compact(   "user_id",
                                                    "gender",
                                                    "residence",
                                                    "city_live_in",
                                                    "city_work_in",
                                                    "mobile1",
                                                    "mobile2",
                                                    "dob",
                                                    "primary_language", 
                                                    "secondary_language",
                                                    "will_relocate",
                                                    "is_anonyous",
                                                    "picture",
                                                    "employment_status",
                                                    "work_experience",
                                                    "sector_most_experience",
                                                    "other_sector1",
                                                    "other_sector2",
                                                    "awards",
                                                    "achievements",
                                                    "recognitions",
                                                    "education_level",
                                                    "graduation_date",
                                                    "ongoing_education",
                                                    "graduation_date2",
                                                    "pro_certifications",
                                                    "ongoing_certifications",
                                                    "has_managed_others",
                                                    "notice_period",
                                                    "is_registered",
                                                    "is_subscribed_newsletter"));
    }
    
    public function remove($id)
    {
        return $this->jobseeker->where($this->jobseeker->getKeyName(), $id)->delete();
    }
}