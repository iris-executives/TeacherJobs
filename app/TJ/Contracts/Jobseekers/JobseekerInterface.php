<?php 

namespace TJ\Contracts\Jobseekers;

interface JobseekerInterface
{
    public function user();
    public function country();
    public function jobApplications();
    public function applyToJob();
}