<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="main-header">
 
    <p class="heading-1">Goverment of the Republic of Bangladesh<p>
    <div class="logo">
        <img src="download.jpg" alt="picture" width="100"
        height="100">
        </div>
    <p class="heading-2">Chattogrram Polytechnic Institute<p>
        
        <p class="heading-3">Diploma-in Engineering Registation 2021-2022<p></div>
<hr class="hr-line">
   
     
      
    
    <div class="from"><h5>Admisson Form<h5>
   
    <form method = "post" action="process.php">
    <div classname="rool">
        <p class="nickname">SSC Roll*</p>
        <input type="text" name=" SSC Roll" value="" placeholder="Enter your Roll">
</div>
<div>
    <p class="nickname">SSC Registation*</p>
<input type="text" name="SSS Registration" value="" placeholder="Enter your Registration ">
</div>
<div class="year">
    <p>Year*</p>
<input type="text" name="Year" value="" placeholder="Enter your passing year ">
</div>
<div>
    <p class="nickname">Board*</p>
<select name="Board" id="Board_name">
    <option value="board-name">Select Board</option>
    <option value="board-name">Chattogrram</option>
    <option value="board-name">Rajshahi</option>
    <option value="board-name">Dhaka</option>
    <option value="board-name">Comilla</option>
    <option value="board-name">Jessore</option>
    <option value="board-name">Barishal</option>
    <option value="board-name">Sylhet</option>
    <option value="board-name">Dinajpur</option>
    <option value="board-name">Madrasah</option>
    <option value="board-name">Technical</option>



</select>
</div>
<div>
    <p class="nickname">Mobile Number*</p>
<input type="text" name=Mobile Number" value="" placeholder="Enter your mobile number ">
</div>
<div>
    <p class="nickname">Email*</p>
         <input type="text" name="e-mail" value ="" placeholder ="Enter your email"></div>
         </div>

        <div class="submit"><button type="submit"> Submit</button>
<button type="reset"> Reset</button></div> 
        <from/>
        </div>

    <?php echo"";?>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<div class="table-name">
    <table style="width:100%" >
        <p class="title">Membar of Polytechnic mess</p>
        <tr>
        <th>Serial No.</th>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
</tr>
<tr>
    <td>01</td>
    <td>Ayakub ALi</td>
    <td>Khagrachari</td>
    <td>018********</td>

   
</tr>

<tr>
<td>02</td>
    <td>Emon Khan</td>
    <td>Khagrachari</td>
    <td>018********</td>
    
</tr>

<tr>
<td>03</td>
    <td>Abdullah al mamun</td>
    <td>Khagrachari</td>
    <td>018********</td>
</tr>

<tr>
<td>04</td>
    <td>Tipu Sultan</td>
    <td>Bandarban</td>
    <td>018********</td>
</tr>
<tr>
<td>05</td>
    <td>Yeasin Arfat</td>
    <td>Bandarba</td>
    <td>018********</td>
</tr>
    </table>
    </div>
    <footer class="under">
        <p>Copyright &copy; 2022 CPI</p>
    </footer>

</body>
</html>