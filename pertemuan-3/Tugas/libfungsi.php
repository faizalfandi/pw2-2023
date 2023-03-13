<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/

	function kelulusan($rata2){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
        if ($rata2>=55) {
            return "lulus";
        }
        elseif ($rata2<=55) {
            return "tidak lulus";
        }
	}
	
	function grade($rata2) {
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/
        if ($rata2<= 35) {
            return "E";
        }
        elseif ($rata2<= 55) {
            return "D";
        }
        elseif ($rata2<= 69) {
            return "C";
        }
        elseif ($rata2<= 84) {
            return "B";
        }
        elseif ($rata2<= 100) {
            return "A";
        }
        else {
            return 'I';
        }
        
	}
	
	function predikat($grade){
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/ 
 
 
 
 
        switch ($grade) {
            case 'A':
                return "sangat memuaskan";
            case 'B':
                return "Memuaskan";
            case 'C':
                return "Cukup";
            case 'D':
                return "Kurang";
            case 'E':
                return "Sangat Kurang";
                
            
            default:
                return "tidak ada";
               
        }
	}
?>