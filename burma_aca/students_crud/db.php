<?php
class DB
{
  protected $pdo;

  public function __construct()
  {
    try {
      $this->pdo = new Pdo("mysql:dbname=school;host=localhost", 'root', "");
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die('Could not connect: ' . $e->getMessage());
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function read(string $table_name)
  {
    $statement = $this->pdo->prepare("SELECT * FROM $table_name");

    if ($statement->execute()) {
      $fetched_obj = $statement->fetchAll(PDO::FETCH_OBJ);
      return $fetched_obj;
    } else {
      echo "Something went wrong";
    };
  }

  public function detail(int | string $id)
  {
    $statement = $this->pdo->prepare("SELECT * FROM students WHERE id = :id");

    $statement->bindParam(':id', $id);

    if ($statement->execute()) {
      $student = $statement->fetch(PDO::FETCH_OBJ);
      return $student;
    } else {
      echo "Something went wrong";
    }
  }

  public function store($data)
  {
    $statement = $this->pdo->prepare("INSERT INTO `students`(`name`, `gender_id`, `birth_date`, `age`, `email`, `course_id`)
    VALUES (:name, :gender_id, :birth_date, :age, :email, :course_id);");

    $statement->bindParam(':name', $data['name']);
    $statement->bindParam(':gender_id', $data['gender']);
    $statement->bindParam(':birth_date', $data['birth_date']);
    $statement->bindParam(':age', $data['age']);
    $statement->bindParam(':email', $data['email']);
    $statement->bindParam(':course_id', $data['course']);

    if ($statement->execute()) {
      echo "New Student Created Success!";
      header("location: ../index.php");
    } else {
      echo "Something went wrong";
    };
  }

  public function update($data, int | string $id)
  {
    $statement = $this->pdo->prepare("UPDATE `students` SET `name` = :name, `gender_id` = :gender_id, `birth_date` = :birth_date, `age` = :age, `email` = :email, `course_id` = :course_id
    WHERE `id` = :id");

    $statement->bindParam(':id', $id);
    $statement->bindParam(':name', $data['name']);
    $statement->bindParam(':gender_id', $data['gender']);
    $statement->bindParam(':birth_date', $data['birth_date']);
    $statement->bindParam(':age', $data['age']);
    $statement->bindParam(':email', $data['email']);
    $statement->bindParam(':course_id', $data['course']);

    if ($statement->execute()) {
      echo "Updated!";
      header("location: ../index.php");
    } else {
      echo "Something went wrong";
    };
  }

  public function destroy($id)
  {
    $statement = $this->pdo->prepare("DELETE FROM `students` WHERE `id` = :id");
    $statement->bindParam(':id', $id);

    if ($statement->execute()) {
      echo "Deleted Success!";
      header("location: ../index.php");
    } else {
      echo "Something went wrong";
    };
  }
}
