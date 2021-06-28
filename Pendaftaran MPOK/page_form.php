<form action="../../process/pendaftaran_mpok.php" enctype="multipart/form-data" method="post" autocomplete="off" style="padding:0px;">
    <div align="center" style="margin:auto;">
        <div align="left" style="background:#fff;">
    	<div style="padding:25px 15px;">
    	    
    	    <h6>Form berwarna merah wajib diisi</h6>
	 
            <h6 class="form_text" style="color:#f00;">Organisasi</h6>
	        <h6 class="form_text_info">Pilih organisasi anda berasal</h6>
            <select class="input_form_default" name="organisasi" required>
                <option value=""></option>
                <option value="PUSKOWAPI">PUSKOWAPI</option>
                <option value="KOWAPI">KOWAPI</option>
                <option value="SOKSI">SOKSI</option>
                <option value="KASATPEL">KASATPEL</option>
                <option value="TKSK">TKSK</option>
                <option value="Masyarakat Umum">Masyarakat Umum</option>
            <select>
                
            <h6 class="form_text" style="color:#f00;">Nama</h6>
            <h6 class="form_text_info">Masukan nama lengkap sesuai yang tertera di KTP</h6>
	        <input class="input_form_default" name="nama" type="text" required>
	
	        <h6 class="form_text" style="color:#f00;">Jenis kelamin</h6>
	        <h6 class="form_text_info">Pilih jenis kelamin anda</h6>
            <select class="input_form_default" name="jenis_kelamin" required>
                <option value=""></option>
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-laki">Laki-laki</option>
            <select>
            
            <h6 class="form_text" style="color:#f00;">Nomor KTP</h6>
            <h6 class="form_text_info">Masukan nomor KTP anda</h6>
	        <input class="input_form_default" name="no_ktp" type="number" required>
            
            <h6 class="form_text" style="color:#f00;">Pendidikan Terakhir</h6>
	        <h6 class="form_text_info">Pilih pendidikan terakhir</h6>
            <select class="input_form_default" name="pendidikan_terakhir" required>
                <option value=""></option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SLTA">SLTA</option>
                <option value="D1">D1</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            <select>
            
            <h6 class="form_text" style="color:#f00;">Handphone/Whatsaap</h6>
            <h6 class="form_text_info">Masukan nomor handphone anda</h6>
	        <input class="input_form_default" name="handphone" type="number" required>

            <h6 class="form_text" style="color:#f00;">Email</h6>
            <h6 class="form_text_info">Masukan email anda</h6>
	        <input class="input_form_default" name="email" type="text">

            <h6 class="form_text" style="color:#f00;">Tanggal Lahir</h6>
            <h6 class="form_text_info">Masukan tanggal lahir anda</h6>
            
            <select class="input_form_default" name="date" style="float:left;width:50px;margin-right:5px;" required>
                <option value="">Tgl</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <select class="input_form_default" name="month" style="float:left;width:100px;margin-right:5px;" required>
                <option value="">Bln</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">Nopember</option>
                <option value="12">Desember</option>
            </select>

            <select class="input_form_default" name="year" style="float:left;width:75px;" required>
                <option value="">Thn</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
                <option value="1918">1918</option>
                <option value="1917">1917</option>
                <option value="1916">1916</option>
                <option value="1915">1915</option>
                <option value="1914">1914</option>
                <option value="1913">1913</option>
                <option value="1912">1912</option>
                <option value="1911">1911</option>
                <option value="1910">1910</option>
                <option value="1909">1909</option>
                <option value="1908">1908</option>
                <option value="1907">1907</option>
                <option value="1906">1906</option>
                <option value="1905">1905</option>
                <option value="1904">1904</option>
                <option value="1903">1903</option>
                <option value="1902">1902</option>
                <option value="1901">1901</option>
                <option value="1900">1900</option>
            </select>
            <div style="clear:both;"></div>
    
            <h6 class="form_text" style="color:#f00;">Alamat Lengkap</h6>
            <h6 class="form_text_info">Masukan alamat lengkap anda</h6>
	        <input class="input_form_default" name="alamat" type="text">
	        
	        <h5 class="form_text" style="color:#f00;">Kodepos</h5>
            <h6 class="form_text_info">Masukan nomor kodepos anda</h6>
            <input class="input_form_default" name="kode_pos" type="number" autocomplete="off" required>
        
            <h5 class="form_text" style="color:#f00;">RW</h5>
            <h6 class="form_text_info">Silahkan pilih nomor RW</h6>
            <select class="input_form_default" name="rw" required>
                <option value=""></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            <select>

            <h5 class="form_text" style="color:#f00;">RT</h5>
            <h6 class="form_text_info">Silahkan pilih nomor RT</h6>
            <select class="input_form_default" name="rt" required>
                <option value=""></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
            <select>
                
	        <h6 class="form_text" style="color:#f00;">Provinsi</h6>
	        <h6 class="form_text_info">Pilih Provinsi</h6>
            <select class="input_form_default" name="prop" id="prop" onchange="ajaxkota(this.value)" required>
                <option value="">Pilih Provinsi</option>
                <?php 
                include 'koneksi.php';
                $query=$db->prepare("SELECT id_prov,nama FROM provinsi ORDER BY nama");
                $query->execute();
                while ($data=$query->fetchObject()){
                    echo '<option value="'.$data->id_prov.'">'.$data->nama.'</option>';
                } ?>
            <select>
      
            <h6 class="form_text" style="color:#f00;">Kota/Kabupaten</h6>
            <h6 class="form_text_info">Pilih Kota/Kabupaten</h6>
            <select class="input_form_default" name="kota" id="kota" onchange="ajaxkec(this.value)" required>
            <option value="">Pilih Kota/Kab</option>
            </select>
    
            <h6 class="form_text" style="color:#f00;">Kecamatan</h6>
            <h6 class="form_text_info">Pilih Kecamatan</h6>
            <select class="input_form_default" name="kec" id="kec" onchange="ajaxkel(this.value)" required>
            <option value="">Pilih Kecamatan</option>
            </select>
    
            <h6 class="form_text" style="color:#f00;">Kelurahan</h6>
            <h6 class="form_text_info">Pilih Kelurahan</h6>
            <select class="input_form_default" name="kel" id="kel" required>
            <option value="">Pilih Kelurahan/Desa</option>
            </select>
    
            <h6 class="form_text" style="color:#f00;">Password</h6>
            <h6 class="form_text_info">Masukan kata sandi anda</h6>
	        <input class="input_form_default" name="password" type="text" required>
    
	        <button class="btn_default efek_hover" type="submit" style="margin-top:50px;">Selanjutnya</button>
	        <img src="../../assets/img/shadow.png" style="width:95%;height:20px;opacity:0.65;display:block;margin-top:1px;">
	        </div>
	    </div>
    </div>
</form>