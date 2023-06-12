<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novels</title>
    <link rel="stylesheet" href="/Asset/CSS/detail.css">

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="header">
        <h1>{{$novel->judul_novel}}</h1>
    </div>
    
    <div class="sinopsis">
        <h2>Sinopsis</h2>
        <p>{{$novel->deskripsi_novel}}</p>
    </div>
    
    <table border="1" style="width: 100%;" align="center">
        <tr>
            <td align="left" colspan="3" bgcolor="#000000"><font color="white" size="20px">
               <b>DESKRIPSI</b>
                </font>
            </td>
        </tr>
        <tr>
            <td rowspan="5" width="100px">
               <img src="{{ env('SERVER_URL') . 'storage/' . $novel->cover_novel }}" width="150px" height="200px" border="2">
            </td>
            <td bgcolor="white">Volume </td>
            <td> {{$novel->seri_novel}} </td>
        </tr>
        <tr>
            <td bgcolor="white"> Judul </td>
            <td> {{$novel->judul_novel}} </td>
        </tr>
        <tr>
            <td align="center" colspan="2" bgcolor="white"> <a href="{{$novel->link_novel}}"><i class="fa-sharp fa-solid fa-file-pdf"></i></a> </td>
        </tr>
    </table>
    
</body>
</html>