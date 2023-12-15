@extends('layouts.master')
@section('title','Mobile Legends : Bang-Bang')
@section('content')
<link rel="stylesheet" href="/css/welcome.css">
<main>
    <div class="container">


        <!-- INTRO -->
        <img src="https://i.ytimg.com/vi/8t_Po9K2Gas/maxresdefault.jpg" alt="gmbr ml" width="700" height="400" class="logo">
        <br>
        <iframe width="700" height="400"
            src="https://www.youtube.com/embed/FKT1c7tXdHg?si=PcnqKXrYH7VVBQcn&autoplay=0&mute=0"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
            class="vid"></iframe>
        <p class="p-intro">Mobile Legends: Bang Bang adalah sebuah permainan
            video mobile berjenis Multiplayer Online Battle Arena
            (MOBA) ciptaan Moonton. Dalam permainan ini, pemain membentuk tim untuk bermain melawan tim
            lawan dalam pertempuran real-time. Setiap pemain memilih seorang hero dengan kemampuan unik untuk membantu
            timnya meraih kemenangan dengan menghancurkan basis lawan. Mobile Legends: Bang Bang adalah salah satu game
            mobile yang sangat populer dan banyak dimainkan di seluruh dunia terutama di Indonesia.</p>

        <br>
        <hr>

        <!-- GAMEMODE -->

            <div id='gamemode' class="gamemode" style="margin-top: 20px;">
            <!-- h2 ini digunakan untuk pemilihan gamemode -->
            <h2>Gamemode dalam Mobile Legends</h2>

            <!-- berikut pilihan gamemode pada mobile legends di bagian h3 -->
            <div class="konten">
                <article>

                    <h3>1. Classic</h3>
                    <p class="large">Mode ini memberikan kesempatan kepada para pemain
                        untuk bertanding
                        5 lawan 5 tanpa khawatir turun peringkat
                        apabila kalah.
                        Mode Classic cocok untuk pemula yang perlu membiasakan diri dengan Mobile Legends.
                        Pada mode ini, pemain dapat dengan bebas memilih hero yang kamu miliki, ditambah hero gratis
                        mingguan dan
                        trial.
                        Namun, dalam satu tim tidak bisa ada hero yang sama.</p>
                </article>
                <article>

                    <h3>2. Rank</h3>
                    <p class="large">Pada mode ini, kamu akan dicocokkan oleh sistem dengan lawan
                        dengan
                        kekuatan yang sama. Pemain dapat mengundang
                        teman untuk bermain dengan catatan punya peringkat bersama.
                        Ada total 7 divisi dalam mode Rank: Warrior, Elite, Master, Grand Master, Epic, Legend, dan Mythic.
                    </p>
                </article>
                <article>

                    <h3>3. Draft Pick</h3>
                    <p class="large">Dalam mode ini, pemain memiliki sekitar 32 detik untuk memilih
                        hero
                        yang akan diblokir / tidak dapat diputar.
                        Hanya anggota ke-4 dan ke-5 dari setiap tim yang dapat mencekal 2 hero.
                        Setelah hero tertentu dilarang, kedua belah pihak akan bergiliran pada rotasi 1/2/2/2/1, memilih
                        hero untuk
                        memasuki pertempuran. Kamu tidak dapat memilih hero yang telah dipilih oleh pemain lain.</p>
                </article>

                <article>

                    <h3>4. Brawl</h3>
                    <p class="large">Mode ini memberikan kesempatan kepada para pemain untuk
                        bertanding
                        5 lawan 5 tanpa khawatir turun peringkat
                        apabila kalah.
                        Mode Classic cocok untuk pemula yang perlu membiasakan diri dengan Mobile Legends.
                        Pada mode ini, pemain dapat dengan bebas memilih hero yang kamu miliki, ditambah hero gratis
                        mingguan dan
                        trial.
                        Namun, dalam satu tim tidak bisa ada hero yang sama.</p>
                </article>
                <article>

                    <h3>5. Human vs A.I</h3>
                    <p class="large">Mode game ini akan memberikan kesempatan bagi kamu untuk
                        melakukan
                        pertarungan 5 lawan 5 sama seperti mode
                        lainnya. Namun, pemain diarahkan bermain bersama pemain sungguhan namun, yang bersaing dengan
                        gameplay yang
                        dikendalikan oleh program kecerdasan buatan game itu sendiri.</p>
                </article>
                <br>

            </div>


        </div>
        <hr>


        <!-- ROLE -->
        <div class="role mt20" id='role'>
            <!-- h2 dibawah digunakan untuk role-role yang ada di mobile legends -->
            <h2>Role Dalam Mobile Legend</h2>
            <img src="https://s5.kh1.co/9c/9c52dd6960bfc5148f9f0ca09e2400025e4a88d7.jpg" alt="gambarRole" width="400"
                height="400">
            <p class="large mt20">Salah satu kelebihan yang bisa didapatkan dari permainan ini
                adalah
                kehadiran hero yang disiapkan oleh pengembang
                game. Untuk bisa menggunakan hero, kamu bisa mendapatkannya secara gratis maupun bisa membelinya menggunakan
                diamond.
                Setiap hero akan memiliki 4 skill yang terdiri dari 1 passive skill dan 3 active skill.
                Dalam game Mobile Legends, hero dibagi menjadi beberapa tipe yakni Fighter, Tank, Marksman, Mage, Support
                dan
                Assasin. Berikut ini penjelasannya:</p>


            <br>
            <div class="konten">

                <!-- h3 dibawah digunakan untuk nama-nama rolenya -->
                <article>

                    <h3>1. Assassin</h3>
                    <p class="large">Bisa dibilang hero ini banyak diminati. Pasalnya, hero ini memiliki
                        damage yang cukup tinggi dan sangat lincah
                        dalam permainan. Belum lagi, hero ini memiliki skill yang mampu membuat karakternya kebal terhadap
                        serangan
                        lawan.</p>
                    <p class="large">Berikut contoh-contoh hero dengan role Assassin : </p>

                    <ul class="large roleList" >
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Fanny" target="_blank">Fanny</a> : dengan
                            tingkat
                            kesulitan
                            yang paling
                            tinggi</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Aamon" target="_blank">Aamon</a> : dengan
                            tingkat
                            kesulitan
                            menengah</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Saber" target="_blank">Saber</a> : dengan
                            tingkat
                            kesulitan
                            yang paling
                            mudah untuk pemula</li>
                    </ul>

                </article>

                <article>

                    <h3>2. Tank</h3>
                    <p class="large">Hero ini menjadi tameng bagi hero lain saat menyerang lawan. Hero
                        ini sangat cocok berada di garis depan untuk
                        membuka jalan bagi rekan setimnya.
                        Walaupun memiliki pertahanan yang kuat, hero tank tak memiliki damage yang mumpuni. Walaupun begitu,
                        hero
                        ini
                        mampu memecah belah formasi lawan.</p>
                    <p class="large">Berikut contoh-contoh hero dengan role Tank : </p>

                    <ul class="large roleList" >
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Atlas" target="_blank">Atlas</a> : dengan
                            tingkat
                            kesulitan
                            yang paling
                            tinggi</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Tigreal" target="_blank">Tigreal</a> : dengan
                            tingkat
                            kesulitan menengah
                        </li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Gatotkaca" target="_blank">Gatotkaca</a> :
                            dengan
                            tingkat
                            kesulitan yang
                            paling mudah untuk pemula</li>
                    </ul>
                </article>

                <article>

                    <h3>3. Marksman</h3>
                    <p class="large">Hero tipe ini memiliki skill dan basic attack yang tinggi. Selain
                        itu, Marksman memiliki jangkauan skill area
                        yang besar. Hero satu ini memiliki peran besar saat membunuh lawan.
                        Namun, untuk urusan defense hero ini kurang. Jadi, kamu perlu punya siasat agar tidak mudah dibunuh
                        saat
                        menggunakan hero tipe ini.</p>
                    <p class="large">Berikut contoh-contoh hero dengan role Marksman : </p>

                    <ul class="large roleList">
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Beatrix" target="_blank">Beatrix</a> : dengan
                            tingkat
                            kesulitan yang paling
                            tinggi</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Brody" target="_blank">Brody</a> : dengan
                            tingkat
                            kesulitan
                            menengah</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Layla" target="_blank">Layla</a> : dengan
                            tingkat
                            kesulitan
                            yang paling
                            mudah untuk pemula</li>
                    </ul>
                </article>

                <article>

                    <h3>4. Fighter</h3>
                    <p class="large">Hero ini memiliki skill yang tidak mengandalkan "mana energi" yang
                        dimiliki tiap hero. Selain itu, hero tipe
                        fighter memiliki damage dan basic attack yang mumpuni yang bernama “Warmonger”.</p>
                    <p class="large">Berikut contoh-contoh hero dengan role Fighter : </p>

                    <ul class="large roleList">
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Yu_Zhong" target="_blank">Yu Zhong</a> : dengan
                            tingkat
                            kesulitan yang
                            paling tinggi</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Dyroth" target="_blank">Dyroth</a> : dengan
                            tingkat
                            kesulitan menengah</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Alpha" target="_blank">Alpha</a> : dengan
                            tingkat
                            kesulitan
                            yang paling
                            mudah untuk pemula</li>
                    </ul>
                </article>

                <article>

                    <h3>5. Support</h3>
                    <p class="large">Dalam permainan hero tipe ini kerap dijadikan ‘kambing hitam’ saat
                        kalah. Namun, peran hero ini penting juga
                        dalam permainan, bisa mendukung serangan tim saat menghadapi lawan.</p>
                    <p class="large">Berikut contoh-contoh hero dengan role Support : </p>

                    <ul class="large roleList">
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Rafaela" target="_blank">Rafaela</a> : dengan
                            tingkat
                            kesulitan yang paling
                            tinggi</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Estes" target="_blank">Estes</a> : dengan
                            tingkat
                            kesulitan
                            menengah</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Angela" target="_blank">Angela</a> : dengan
                            tingkat
                            kesulitan yang paling
                            mudah untuk pemula</li>
                    </ul>
                </article>

                <article>

                    <h3>6. Mage</h3>
                    <p class="large">Hero dengan tipe Mage sering membuat lawan takut. Hal itu
                        dikarenakan hero ini memiliki damage yang besar. Dengan
                        dibekali efek ability yang tinggi, hero satu ini kerap dijadikan petarung untuk mendukung hero
                        lainnya saat
                        menyerang.</p>
                    <p class="large">Berikut contoh-contoh hero dengan role Mage : </p>

                    <ul class="large roleList">
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Eudora" target="_blank">Eudora</a> : dengan
                            tingkat
                            kesulitan yang paling
                            tinggi</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Lylia" target="_blank">Lylia</a> : dengan
                            tingkat
                            kesulitan
                            menengah</li>
                        <li> <a href="https://mobile-legends.fandom.com/wiki/Kagura" target="_blank">Kagura</a> : dengan
                            tingkat
                            kesulitan yang paling
                            mudah untuk pemula</li>
                    </ul>
                </article>
            </div>

        </div>

        <br>
        <hr>


        <!-- SOUNDTRACK -->
        <div class="soundtrack mt20" id='soundtrack'>
            <h2 class="mt20">Soundtrack dalam Mobile Legends</h2>
            <p class="large mt20">Soundtrack Mobile Legends memiliki theme song yang iconic dibagian
                menu permainan. Dengan suara epik dan tema pahlawan yang diputar sebelum bermain membuat theme song ini
                diingat
                oleh para player Mobile Legends. Berikut soundtracknya</p>
            <audio controls src="./util/Mobile legend Background Music Theme song (season 1 - Season 20)_wMtmVwnu29M.mp3 legend Background Music Theme song (season 1 - Season 20)_wMtmVwnu29M.mp3"
                style="display: block; margin-left: auto; margin-right: auto;"></audio>
            <br>

        </div>
        <hr>

        <!-- KESIMPULAN -->
        <div class="kesimpulan mt20" id='kesimpulan'>
            <h2 class="mt20">Kesimpulan</h2>
            <p class="large mt20">Mobile Legends adalah permainan MOBA populer untuk perangkat
                seluler. Terdapat berbagai peran, termasuk Tank, Fighter, Marksman, Mage, dan Support. Mode permainan
                meliputi
                Classic, Rank, Brawl, Survival, dan Custom, masing-masing menawarkan pengalaman bermain yang berbeda.
                Kesuksesan
                dalam permainan ini tergantung pada strategi, kerja sama tim, dan pemahaman peran yang bijak.</p>
            <br>

        </div>
    </div>
</main>

@endsection
