<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film_id'=> '1',
            'user'=> 'ifan ismail',
            'rating'=> '9.1',
            'review'=> 'Film Habibie & Ainun 3 mengambil alur maju mundur dari masa sekarang dan masa sekitar tahun 1950-an. Film dibuka dengan adegan saat BJ Habibie berziarah ke makan Hasri Ainun tepat setahun setelah kepergiannya.',
            'tanggal'=> '2009-12-19' ,
        ]);
        
        Review::create([
            'film_id'=> '2',
            'user'=> 'Ernest prakasa',
            'rating'=> '8.9',
            'review'=> 'sebuah film garapan komika ternama Ernest Prakasa yang mengisahkan tentang sebuah realita yang umum terjadi di kalangan etnis Tionghoa. Dimana dalam kisahnya Ernest seperti curhat tentang bagaimana seseorang yang telah mengenyam pendidikan tinggi namun harus mengikuti apa yang dikehendaki oleh keluarga.',
            'tanggal'=> '2016-12-28' ,
        ]);
        
        Review::create([
            'film_id'=> '1',
            'user'=> 'Alyandra, Danial rifki',
            'rating'=> '9.7',
            'review'=> 'Film ini mengisahkan Angel (Adila Fitri) seorang gadis remaja berusia 15 tahun yang tidak pernah bisa menerima keadaan kakaknya Hendra (Ali Mensan) yang terlahir dengan keterbelakangan mental. Walaupun Angel begitu malu dan membencinya, Hendra tidak pernah bersedih hati. Hendra menjadi anak yang berkebutuhan khusus akibat sakit yang di derita waktu kecil. Walaupun demikian Ia tetap setia memberikan kasih sayang seorang kakak kepada adiknya.',
            'tanggal'=> '2014-10-02',
        ]);
        
        Review::create([
            'film_id'=> '2',
            'user'=> 'Armantono',
            'rating'=> '9.3',
            'review'=> 'Bertepatan dengan peringatan tujuh tahun terjadinya bencana tsunami di Aceh pada 26 Desember 2004 yang lalu, sebuah film drama keluarga berlatar belakang salah satu tragedi alam terbesar yang pernah dialami umat manusia tersebut dirilis di banyak layar bioskop Indonesia. Berjudul Hafalan Shalat Delisa, yang diangkat dari sebuah novel berjudul sama karya Tere Liye, film ini sekaligus menandai kali kedua Sony Gaokasak untuk duduk di kursi penyutradaraan sebuah film layar lebar setelah sebelumnya mengarahkan Tentang Cinta (2007).',
            'tanggal'=> '2011-12-22',
        ]);
        
        Review::create([
            'film_id'=> '1',
            'user'=> 'Raditya Dika',
            'rating'=> '9.3',
            'review'=> 'Raditya Dika mengibaratkan cinta pertama dengan filosofi marmut merah jambu.Ia membayangkan marmut merah jambu yang berlari di sebuah roda, terus berlari, tetapi nyatanya si marmut merah jambu itu tidak kemana-mana. Begitulah cinta pertama yang masih selalu terkenang. Setidaknya bagi Raditya Dika yang mengenang Ina, sebagai cinta pertamanya di masa SMA. Kisah nyata Raditya Dika itu bisa dinikmati dalam film Marmut Merah Jambu yang disutradarai sendiri olehnya.',
            'tanggal'=> '2014-05-08',
        ]);
    }
}
