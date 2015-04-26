 <!DOCTYPE html>
 <!--
 To change this license header, choose License Headers in Project Properties.
 To change this template file, choose Tools | Templates
 and open the template in the editor.
 -->
 <html>
     <head>
         <meta charset="UTF-8">
         <title>titolo</title>
     </head>
     <body>
+        <h1>Ciao</h1>
+        <select>
         <?php
-        // put your code here
+        for ($i=0;$i<10;$i++)
+        {
+            ?>
+            <option value="<?php echo $i ;?>" >Valore <?php echo $i ;?></option>
+        <?php
+            }
         ?>
+        </select>
     </body>
 </html>
