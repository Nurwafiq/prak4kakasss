<form method= "POST" action="{{url('mahasiswa')}}"method = 'post'>
@csrf
<div class= "form-group">
    <label for= "nim">NIM></label>
    <input type= "text" class="form-control" id="nim" name="nim">
</div>
<div class= "form-group">
    <label for ="nama">NAMA</label>
    <input type= "text" class="form-control" id="nama" name="nama">
</div>
<div class= "form-group">
    <label for= "kelas">KELAS></label>
    <input type= "text" class="form-control" id="judul" name="judul">
</div>
<div class= "form-group">
    <label for= "jurusan">JURUSAN></label>
    <input type= "text" class="form-control" id="jurusan" name="jurusan">
</div>

     <SELECT name="jurusan">
    <option value="0" selected>Pilih Jurusan</option>
    <option value="1" >Sistem Informasi</option>
    <option value="2" >Tehnik Informatika</option>
    
    </SELECT>
<br/>
     
  <div id='myform_errorloc' style='color:red'>
                              </div>
   <br/>

<button type= "submit" class= "btn btn-primary">submit</button>
</form>
</body>
</html>