<?php 



?>

<div class="container" style="max-height: 300px !important;">
        <header>Add product Form</header>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">product Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>product Name</label>
                            <input type="text" name="productName" placeholder="Enter the product's name" >
                        </div>

                        <div class="input-field" id="image">
                            <label>product img</label>
                            <input type="file" name="logo" style="border : none">
                        </div>
                        <div class="input-field">
                            <label>product desc</label>
                            <input type="text" name="productDesc" placeholder="Enter the product's desc" >
                        </div>
                        <div class="input-field">
                            <label>product price</label>
                            <input type="text" name="productprice" placeholder="Enter the product's price" >
                        </div>
                        <div class="input-field">
                            <label>product category</label>
                            <input type="text" name="productName" placeholder="Enter the product's name" >
                        </div>
                        <select name="category" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                    <option value="" selected disabled >Select Product Category</option>
                </select>

                        <div>
                            <button type="submit" class="bg-indigo-500 py-[0.5rem] px-[1rem] rounded-lg">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
           
            
        </form>
        <p class="text-red-500 font-semibold">
         <?php if(!empty($data["error"])){
            echo $data["error"];
         }?>
        </p>
       
        
       

    
    </div>
