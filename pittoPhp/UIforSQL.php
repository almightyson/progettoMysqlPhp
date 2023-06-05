<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .containerCreate{
            display: flex;
            flex-direction:row;
            
        }
        .form1{
            display: flex;
            flex-direction: column;
            background-color: rgb(200, 200, 202);
            height: 300px;
            width: 300px;
            padding: 20px;
            justify-content: center;
            margin:10px;
        }
        .form2{
             display: flex;
            flex-direction: column;
             background-color: rgb(177, 177, 177);
             justify-content: center;
            height: 300px;
            width: 800px;
            padding: 20px;
            margin:10px;

        }
    </style>
</head>
<body>
    <div class="containerCreate">
    <div class="form1" >
            <form action="createDatabase.php" method="post">
                <h5>createDatabase</h5>
                <div>
                    <label for="">serverName</label>
                    <input type="text" name="serverName"></input>
                </div>
                <div>
                    <label for="">userName</label>
                    <input type="text" name="userName"></input>
                </div>
                <div>
                    <label for="">password</label>
                    <input type="text" name="password"></input>
                </div>
                <div>
                    <label for="">databaseName</label>
                    <input type="text" name="databaseName"></input>
                </div>
                
            
            
                <input type="submit" value="submit">
            </form>
        </div>


        
        <div class="form2">   
            <form   action="createTable.php" method="post">
                <h5>createTable</h5>
                <div>
                    <label for="" >serverName</label>
                <input type="text" name="serverName"></input>
                </div>
                <div>
                    <label for="" >userName</label>
                    <input type="text" name="userName"></input>
                </div>
            <div>
                    <label for="">password</label>
                    <input type="text" name="password"></input>
            </div>
                <div>
                    <label for="">databaseName</label>
                    <input type="text" name="databaseName"></input>
                </div>
                <div> 
                    <label for="">tableName</label>
                    <input type="text" name="tableName"></input>
                </div>
            <div>
                    <label for="">column1</label>
                    <input type="text" name="att1"></input>

                    <label for="">dataType1</label>
                    <select name="dataType1" >
                        <option value="char">char</option>
                        <option value="int">int</option>
                    </select>

                    <label for="">lenght1</label>
                    <input type="number" name="lenght1"></input>

            </div>
            <div>
                    <label for="">column2</label>
                    <input type="text" name="attr"></input>

                    <label for="">datatype2</label>
                    <select name="dataType2" >
                        <option value="char">char</option>
                        <option value="int">int</option>
                    </select>

                    <label for="">lenght2</label>
                    <input type="number" name="lenght2"></input>
            </div>
            <div>
                    <label for="">column3</label>
                    <input type="text" name="attrb"></input>

                    <label for="">dataType3</label>
                    <select name="dataType3" >
                        <option value="char">char</option>
                        <option value="int">int</option>
                    </select>   

                    <label for="">lenght3</label>
                    <input type="number" name="lenght3"></input>
            </div>
                
            
                <input type="submit" value="submit">
            </form>
        </div> 

    </div>
    <div class="containerQuerry"></div>
    
    
</body>
</html>