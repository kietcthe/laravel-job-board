<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public static array $availableExperiences = ['entry', 'intermediate', 'senior'];
    public static array $availableCategories = ['IT', 'Marketing', 'Finance', 'Sales', 'Other'];
}
