<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $Reviews = [
        [
            'no'=> 1,
            'film'=> 'Habibie & Ainun 3',
            'user'=> 'ifan ismail',
            'rating'=> '9.1',
            'review'=> 'Film Habibie & Ainun 3 mengambil alur maju mundur dari masa sekarang dan masa sekitar tahun 1950-an. Film dibuka dengan adegan saat BJ Habibie berziarah ke makan Hasri Ainun tepat setahun setelah kepergiannya.',
            'tanggal'=> 19 . 'desember'. 2009,
        ],
        [
            'no'=> 2,
            'film'=> 'cek toko sebelah',
            'user'=> 'Ernest prakasa',
            'rating'=> '8.9',
            'review'=> 'sebuah film garapan komika ternama Ernest Prakasa yang mengisahkan tentang sebuah realita yang umum terjadi di kalangan etnis Tionghoa. Dimana dalam kisahnya Ernest seperti curhat tentang bagaimana seseorang yang telah mengenyam pendidikan tinggi namun harus mengikuti apa yang dikehendaki oleh keluarga.',
            'tanggal'=>28 . 'desember'. 2016 ,
        ],
        [
            'no'=> 3,
            'film'=> 'my idiot brother',
            'user'=> 'Alyandra, Danial rifki',
            'rating'=> '9.7',
            'review'=> 'Film ini mengisahkan Angel (Adila Fitri) seorang gadis remaja berusia 15 tahun yang tidak pernah bisa menerima keadaan kakaknya Hendra (Ali Mensan) yang terlahir dengan keterbelakangan mental. Walaupun Angel begitu malu dan membencinya, Hendra tidak pernah bersedih hati. Hendra menjadi anak yang berkebutuhan khusus akibat sakit yang di derita waktu kecil. Walaupun demikian Ia tetap setia memberikan kasih sayang seorang kakak kepada adiknya.',
            'tanggal'=> 2 . 'oktober' . 2014,
        ],
        [
            'no'=> 4,
            'film'=> 'Hafalan Shalat Delisa',
            'user'=> 'Armantono',
            'rating'=> '9.3',
            'review'=> 'Bertepatan dengan peringatan tujuh tahun terjadinya bencana tsunami di Aceh pada 26 Desember 2004 yang lalu, sebuah film drama keluarga berlatar belakang salah satu tragedi alam terbesar yang pernah dialami umat manusia tersebut dirilis di banyak layar bioskop Indonesia. Berjudul Hafalan Shalat Delisa, yang diangkat dari sebuah novel berjudul sama karya Tere Liye, film ini sekaligus menandai kali kedua Sony Gaokasak untuk duduk di kursi penyutradaraan sebuah film layar lebar setelah sebelumnya mengarahkan Tentang Cinta (2007).',
            'tanggal'=> 22 . 'desember' . 2011,
        ],
        [
            'no'=> 5,
            'film'=> 'Marmut Merah Jambu',
            'user'=> 'Raditya Dika',
            'rating'=> '9.3',
            'review'=> 'Raditya Dika mengibaratkan cinta pertama dengan filosofi marmut merah jambu.Ia membayangkan marmut merah jambu yang berlari di sebuah roda, terus berlari, tetapi nyatanya si marmut merah jambu itu tidak kemana-mana. Begitulah cinta pertama yang masih selalu terkenang. Setidaknya bagi Raditya Dika yang mengenang Ina, sebagai cinta pertamanya di masa SMA. Kisah nyata Raditya Dika itu bisa dinikmati dalam film Marmut Merah Jambu yang disutradarai sendiri olehnya.',
            'tanggal'=> 8 . 'mei'. 2014,
        ],

    ];

    public function getAllReviews()
    {
        return $this->Reviews;
    }
}

