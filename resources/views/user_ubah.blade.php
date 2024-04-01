<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <body>
            <h1>Form Edit User</h1>
            <a href="/user">Kembali</a>
            <br><br>
            <form action="/user/ubah_simpan/{{$data->user_id}}" method="post">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <label>Username</label>
                <input type="text" name="username" placeholder="Masukkan Username" value="{{$data->username}}">
                <br>
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukan Nama" value="{{$data->nama}}">
                <br>
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukan Password" value="{{$data->password}}">
                <br>
                <label>Level ID</label>
                <input type="number" name="level_id" placeholder="Masukan ID Level" value="{{$data->level_id}}">
                <br><br>
                <input type="submit" class="btn btn-success" value="Ubah">
            
            </form>
        </body>
    </head>
</html>