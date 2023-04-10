<?php
		/**
     * PHP Function
		 * 1. winRate($jumlahMenang, $jumlahKalah) | Menghitung Win Rate
		 * 2. cek_tier($winRate) | Menentukan tier berdasarkan fungsi winrate
		 * 3. predikat($winRate) | Menentukan predikat berdasarkan fungsi cek_tier
     */
    function winRate($jumlahMenang, $jumlahKalah) {
				// Menghitung winrate berdasarkan jumlah menang, jumlah kalah dan total match
        $totalMatch = $jumlahMenang + $jumlahKalah;
        $wr = $jumlahMenang / $totalMatch;

        return $wr;
    }

    function cekTier(SwinRate) {
        // Menentukan tier berdasarkan fungsi WinRate
        if ($winRate >= 0.7) {
            return 'Mythic';
        } elseif ($winRate >= 0.45) {
            return 'legend';
        } elseif ($winRate >= 0.2) {
            return 'epic';
        } else {
            return 'master';
        }
    }

    function predikat($winRate) {
        switch (cekTier($winRate)) {
            case 'Mythic';
            return 'Sangat memuaskan';
            break;
        case 'Legend';
            return 'Memuaskan';
            break;
        case 

        }
    }