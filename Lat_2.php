<!-- Segitiga asli -->
<!-- <?php
for($i=0;$i<=9;$i++){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br/>";
}
?> -->

<!-- Segitiga terbalik -->
<?php
for($i=9;$i>=0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br/>";
}
?>

<!-- Beserta buatlah komentar tiap line dari perintah yang ada, jelaskan maksud dari setiap baris scriptnya. -->
<!-- 
1. Baris pertama ($i=9) adalah inisialisasi variabel $i yang dimulai dari nilai 9
2. Kondisi perulangan adalah selama variabel $i lebih besar dari atau sama dengan 0, maka lakukan perulangan
3. Setiap kali perulangan diulang, variabel $i akan dikurangi 1 ( $i-- )
4. Pada setiap perulangan variabel $i, kita memiliki perulangan lain ( $j=0; $j<$i; $j++ )
5. Kondisi perulangan kedua adalah selama variabel $j kurang dari variabel $i, maka lakukan perulangan
6. Setiap kali perulangan kedua diulang, akan menampilkan simbol bintang (*)
7. Pada setiap perulangan kedua, simbol bintang akan ditampilkan sebanyak variabel $i
8. Setelah perulangan kedua selesai, kita membuat baris baru menggunakan tag HTML <br/>
9. Proses perulangan akan berlanjut kembali ke perulangan pertama untuk mencetak baris baru
10. Perulangan pertama akan berhenti saat variabel $i mencapai nilai 0
-->


<!-- Penjelasan hasil -->
<!-- 
*********;       *i9j0,*i9j1,*i9j2,*i9j3,*i9j4,*i9j5,*i9j6,*i9j7,*i9j8  #Disini ketika i=9 dan j=9 membuat keluar dari perulangan tingkat2 karena kondisi  yaitu j<i kondisi tidak memenuhi. Setelah itu, nilai variabel $i akan dikurangi 1 dan perulangan akan dilakukan kembali dari nilai $i yang baru yaitu i=9-1. 
********;         i8j0,i8j1,i8j2,i8j3,i8j4,i8j5,i8j6,i8j7               #$i=8, menampilkan 8 karakter ketika i=8 dan j=8 kondisi perulangan tingkat ke-2 tidak memenuhi j<i. Setelah itu, nilai variabel $i akan dikurangi 1 dan perulangan akan dilakukan kembali dari nilai $i yang baru yaitu i=8-1.
*******;          i7j0,i7j1,i7j2,i7j3,i7j4,i7j5,i7j6                    #$i=7, menampilkan 7 karakter ketika i=7 dan j=7 kondisi perulangan tingkat ke-2 tidak memenuhi j<i. Setelah itu, nilai variabel $i akan dikurangi 1 dan perulangan akan dilakukan kembali dari nilai $i yang baru yaitu i=7-1.
******;           i6j0,i6j1,i6j2,i6j3,i6j4,i6j5                         #$i=6, menampilkan 6 karakter ketika i=6 dan j=6 kondisi perulangan tingkat ke-2 tidak memenuhi j<i. Setelah itu, nilai variabel $i akan dikurangi 1 dan perulangan akan dilakukan kembali dari nilai $i yang baru yaitu i=6-1.
*****;            i5j0,i5j1,i5j2,i5j3,i5j4                              #$i=5, menampilkan 5 karakter ketika i=5 dan j=5 kondisi perulangan tingkat ke-2 tidak memenuhi j<i. Setelah itu, nilai variabel $i akan dikurangi 1 dan perulangan akan dilakukan kembali dari nilai $i yang baru yaitu i=5-1.
****;             i4j0,i4j1,i4j2,i4j3                                   #$i=4, menampilkan 4 karakter ketika i=4 dan j=4 kondisi perulangan tingkat ke-2 tidak memenuhi j<i. Setelah itu, nilai variabel $i akan dikurangi 1 dan perulangan akan dilakukan kembali dari nilai $i yang baru yaitu i=4-1.
***;              i3j0,i3j1,i3j2                                        #$i=3, menampilkan 3 karakter ketika i=3 dan j=3 kondisi perulangan tingkat ke-2 tidak memenuhi j<i. Setelah itu, nilai variabel $i akan dikurangi 1 dan perulangan akan dilakukan kembali dari nilai $i yang baru yaitu i=3-1.
**;               i2j0,i2j1                                             #$i=2, menampilkan 2 karakter ketika i=2 dan j=2 kondisi perulangan tingkat ke-2 tidak memenuhi j<i. Setelah itu, nilai variabel $i akan dikurangi 1 dan perulangan akan dilakukan kembali dari nilai $i yang baru yaitu i=2-1.
*;                i1j0                                                  #$i=1, menampilkan 1 karakter ketika i=1 dan j=1 kondisi perulangan tingkat ke-2 tidak memenuhi j<i. Setelah itu, nilai variabel $i akan dikurangi 1 dan perulangan akan dilakukan kembali dari nilai $i yang baru yaitu i=1-1.

                                                                        #$i=0, kondisi tidak memenuhi karena $i>=0, karakter berhenti ditulis.
-->