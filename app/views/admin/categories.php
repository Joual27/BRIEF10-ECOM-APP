<?php
    $pageTitle = "Admin Page";
    $SpecialTitle = "Categories";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DATA TABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">

    <title><?= $pageTitle ?></title>
</head>
<body>
    <section class="flex items-center relative">
        
        <!-- DASHBOARD ASIDE -->
        <?php require_once(__DIR__."/../incFile/admin-nav-bar.php"); ?>

        <main class="bg-gray-100 flex-grow h-[100vh] relative pt-2">
            <div class="md:m-5  md:p-5">

                <!-- PAGE HEAD -->
                <?php require_once(__DIR__."/../incFile/admin-header.php"); ?>
                
                <!-- DATA TABLE -->
                <div class="rounded-lg overflow-hidden mt-3">
                    <table class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 " id="Table" style="width:100%">
                        <thead>
                            <tr class="bg-[#1d3557] text-white h-[50px] ">
                                <td class="pl-4 border-2 border-[#1d3557]">ID </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Name </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Description </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Actions </td>
                            </tr>
                        </thead>
                        <tbody class="sm:w-full">
                            <!-- DATA HERE ======================== -->
                        </tbody>
                    </table>
                </div>
                
            </div>
        </main>
    </section>



    <!-- ADD SECTION -->
    <div id="popupContainer" class="fixed inset-0 flex items-center justify-end bg-black bg-opacity-50 hidden">
        <section class="md:m-5 md:p-5 bg-white rounded-md absolute h-[95vh] w-[40vw]">

            <button  onclick="hiddPopup()" class="bg-red-200 border-2 border-red-500 text-red-500 h-[50px] px-4 py-2 rounded mb-2" >Close</button>
                    
            <!-- ADD FORM --> 
            <form method="POST" class="w-full" enctype="multipart/form-data" >
                <input type="text" name="name" placeholder="Category Name" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                <textarea name="description" placeholder="Category Description" class="w-full mb-2 p-2 border-2 border-gray-600 rounded"></textarea>

                <button type="submit" name="addCategory" class="bg-[#1d3557] text-white px-4 py-2 rounded">Save Category</button>
                <button type="reset" class="bg-blue-200 border-2 border-[#1d3557] text-[#1d3557] px-4 py-2 rounded">Reset Form</button>
            </form>
        </section>
    </div>


    <!-- DATATABLE SCRIPT LINKS -->
    <?php require_once(__DIR__."/../incFile/dataTable.php"); ?>

    <script>
        var popupContainer = document.getElementById('popupContainer');
        function showPopup() {popupContainer.classList.toggle('hidden');}
        function hiddPopup() {popupContainer.classList.toggle('hidden');}
        
        $(document).ready(function() {
            $('#Table').DataTable({});
        });
    </script>


</body>
</html>