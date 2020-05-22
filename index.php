<?php
require_once 'Student.php';
require_once 'Course.php';
require_once 'Pets.php';

$coursePHP = new Course('PHP', 16);
$courseJava = new Course('Java', 10);

$petsOne = new Pets('Lily', 'cat');
$petsSecond = new Pets('Rex', 'dog');
$petsThird = new Pets('Will', 'rabbit');

$studentOne = new Student('Vitalii', 'Puhach', 22 , '22-02-1998', $coursePHP, $petsOne);
$studentSecond = new Student('Lexa', 'Mavl', 28 , '22-05-1992', $coursePHP, $petsSecond);
$studentThird = new Student('Anna', 'Hich', 20 , '22-06-1996', $courseJava, $petsThird);
$students = [$studentOne, $studentSecond, $studentThird];

$index = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Hillel students list</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">First Name</th>
					<th scope="col">Last Name</th>
					<th scope="col">Full Name</th>
					<th scope="col">Age</th>
					<th scope="col">BirthDate</th>
					<th scope="col">Course/Lessons count</th>
					<th scope="col">Pet name/Type</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($students as $student): ?>
					<tr>
						<th scope="row"><?= ++$index ?></th>
						<td><?= $student->getFirstName() ?></a></td>
						<td><?= $student->getLastName() ?></td>
						<td><?= $student->getFullName() ?></td>
						<td><?= $student->getAge() ?></td>
						<td><?= $student->getBirthDate() ?></td>
						<td><?= $student->getCourse()->getName() ?> / <?= $student->getCourse()->getLessonsCount() ?></td>
						<td><?= $student->getPets()->getName() ?> / <?= $student->getPets()->getType() ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>