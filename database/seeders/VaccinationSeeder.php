<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Seeder;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['patient_name' => 'Baby Andrea Villanueva', 'purok' => 'Purok 2', 'vaccine' => 'BCG',
             'dose' => 'At birth', 'scheduled_at' => '2026-09-14', 'status' => 'Done'],
            ['patient_name' => 'Baby Miguel Santos', 'purok' => 'Purok 5', 'vaccine' => 'Pentavalent',
             'dose' => '2nd dose', 'scheduled_at' => '2026-11-06', 'status' => 'Scheduled'],
            ['patient_name' => 'Baby Kristine Bautista', 'purok' => 'Purok 4', 'vaccine' => 'OPV',
             'dose' => '3rd dose', 'scheduled_at' => '2026-10-12', 'status' => 'Overdue'],
            ['patient_name' => 'Joshua Mendoza', 'purok' => 'Purok 1', 'vaccine' => 'MMR',
             'dose' => '1st dose', 'scheduled_at' => '2026-11-18', 'status' => 'Scheduled'],
            ['patient_name' => 'Lolo Ernesto Garcia', 'purok' => 'Purok 6', 'vaccine' => 'Anti-Flu',
             'dose' => 'Annual', 'scheduled_at' => '2026-10-02', 'status' => 'Done'],
            ['patient_name' => 'Lola Remedios Aquino', 'purok' => 'Purok 3', 'vaccine' => 'Pneumococcal (PCV)',
             'dose' => 'Single dose', 'scheduled_at' => '2026-11-25', 'status' => 'Scheduled'],
            ['patient_name' => 'Baby Anna Leigh Waters', 'purok' => 'Purok 2', 'vaccine' => 'Pentavalent',
             'dose' => '1st dose', 'scheduled_at' => '2026-06-24', 'status' => 'Done'],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}
