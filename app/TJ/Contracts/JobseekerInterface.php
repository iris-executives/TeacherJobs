<?php 

namespace TJ\Contracts;

interface JobseekerInterface
{
    public function user();
    public function country();
    public function jobApplications();
    public function applyToJob();
}