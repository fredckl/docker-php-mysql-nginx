<?php

require_once(__DIR__ . '/orm/connect.php');
$con = connect();

$employees = $con->query('SELECT * from employees')->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Docker stack</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container mx-auto my-20">
    <div>
      <h1 class="font-bold text-2xl mb-5">Demo <i>Docker stack</i></h1>
    </div>
    <div class="overflow-x-auto relative">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="py-3 px-6">
              Firstname
            </th>
            <th scope="col" class="py-3 px-6">
              Lastname
            </th>
            <th scope="col" class="py-3 px-6">
              Email
            </th>
            <th scope="col" class="py-3 px-6">
              Job
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($employees as $employee) : ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $employee->first_name ?>
              </th>
              <td class="py-4 px-6">
                <?php echo $employee->last_name ?>
              </td>
              <td class="py-4 px-6">
                <?php echo $employee->email ?>
              </td>
              <td class="py-4 px-6">
                <?php echo $employee->job_title ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>