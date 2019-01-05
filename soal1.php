<?php
      $name = "Rizal Hermawan";
      $address = "Jln. H. Dhimun II No. 165 RT 003 RW 024 Kp. Sidamukti Sukmajaya Depok";
      $hobbies =  array("Watching a Film", "Listening a Music", "Programming", "Travelling");
      $isMarried = false;
      $school = [
        'highSchool' => 'SMK Putra Bangsa Depok',
        'university' => 'Universitas BSI Jakarta'
      ];
      $skills = [
        'webProgramming' => ['PHP', 'HTML', 'CSS', 'JavaScript', 'SQL', 'Laravel', 'jQuery'],
        'others' => ['Photoshop', 'Microsoft Word', 'Microsoft Powerpoint']
      ];

      function myBiodata($name, $address, $hobbies, $isMarried, $school, $skills) {
        return json_encode(array(
          'name' => $name,
          'address' => $address,
          'hobbies' => $hobbies,
          'isMarried' => $isMarried,
          'school' => $school,
          'skills' => $skills
        ),JSON_PRETTY_PRINT);
        
      }

      echo myBiodata($name, $address, $hobbies, $isMarried, $school, $skills);

?>

