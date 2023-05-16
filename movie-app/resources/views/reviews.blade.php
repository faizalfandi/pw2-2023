@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movie Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Habibie & ainun 3</td>
                        <td>ifan ismail</td>
                        <td>9.1</td>
                        <td>Film Habibie & Ainun 3 mengambil alur maju mundur dari masa sekarang dan masa sekitar tahun 1950-an. Film dibuka dengan adegan saat BJ Habibie berziarah ke makan Hasri Ainun tepat setahun setelah kepergiannya.</td>
                        <td>19 desember 2009</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>cek toko sebelah</td>
                        <td>ernest prakasa</td>
                        <td>8.9</td>
                        <td>sebuah film garapan komika ternama Ernest Prakasa yang mengisahkan tentang sebuah realita yang umum terjadi di kalangan etnis Tionghoa. Dimana dalam kisahnya Ernest seperti curhat tentang bagaimana seseorang yang telah mengenyam pendidikan tinggi namun harus mengikuti apa yang dikehendaki oleh keluarga.</td>
                        <td>28 desember 2016</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>my idiot brother</td>
                        <td>Alyandra, Danial rifki</td>
                        <td>9.7</td>
                        <td>Film ini mengisahkan Angel (Adila Fitri) seorang gadis remaja berusia 15 tahun yang tidak pernah bisa menerima keadaan kakaknya Hendra (Ali Mensan) yang terlahir dengan keterbelakangan mental. Walaupun Angel begitu malu dan membencinya, Hendra tidak pernah bersedih hati. Hendra menjadi anak yang berkebutuhan khusus akibat sakit yang di derita waktu kecil. Walaupun demikian Ia tetap setia memberikan kasih sayang seorang kakak kepada adiknya.</td>
                        <td> 2 oktober 2014</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hafalan Shalat Delisa</td>
                        <td>Armantono</td>
                        <td>9.3</td>
                        <td>Bertepatan dengan peringatan tujuh tahun terjadinya bencana tsunami di Aceh pada 26 Desember 2004 yang lalu, sebuah film drama keluarga berlatar belakang salah satu tragedi alam terbesar yang pernah dialami umat manusia tersebut dirilis di banyak layar bioskop Indonesia. Berjudul Hafalan Shalat Delisa, yang diangkat dari sebuah novel berjudul sama karya Tere Liye, film ini sekaligus menandai kali kedua Sony Gaokasak untuk duduk di kursi penyutradaraan sebuah film layar lebar setelah sebelumnya mengarahkan Tentang Cinta (2007).</td>
                        <td>22 desember 2011</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Marmut Merah Jambu</td>
                        <td>Raditya Dika</td>
                        <td>9.3</td>
                        <td>Raditya Dika mengibaratkan cinta pertama dengan filosofi marmut merah jambu.Ia membayangkan marmut merah jambu yang berlari di sebuah roda, terus berlari, tetapi nyatanya si marmut merah jambu itu tidak kemana-mana. Begitulah cinta pertama yang masih selalu terkenang. Setidaknya bagi Raditya Dika yang mengenang Ina, sebagai cinta pertamanya di masa SMA. Kisah nyata Raditya Dika itu bisa dinikmati dalam film Marmut Merah Jambu yang disutradarai sendiri olehnya.</td>
                        <td>8 mei 2014</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
