<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      

        $rows = ['A', 'B', 'C', 'D', 'E','F', 'G', 'H'];

        foreach ($rows as $row) {
            for ($seatNumber = 1; $seatNumber <= 4; $seatNumber++) {
                $seat = $row . $seatNumber;

                Ticket::create([
                    
                    'seat_number' => $seat,
                ]);
            }
        }
    }
    }

