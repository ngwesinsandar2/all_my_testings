CREATE TABLE students (
  `id`: UNSIGNED INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name`: VARCHAR(255) NOT NULL,
  `gender_id`: UNSIGNED INT NOT NULL,
  `birth_date`: DATE NOT NULL,
  `age`: UNSIGNED INT NOT NULL,
  `email`: VARCHAR(255) NOT NULL,
  `course_id`: UNSIGNED INT NOT NULL,
)

CREATE TABLE genders (
  `id`: INT NOT NULL AUTO_INCREMENT,
  `name`: VARCHAR(255) NOT NULL,
)

CREATE TABLE courses (
  `id`: INT NOT NULL AUTO_INCREMENT,
  `name`: VARCHAR(255) NOT NULL,
)

CREATE TABLE course_student (
  `student_id`: INT,
  `course_id`: INT,
)

-- Insert --
INSERT INTO `students`(`name`, `gender_id`, `birth_date`, `email`, `course_id`)
VALUES ('Ngwe Sin', '2', '1993-04-06', 'test@gmail.com', '2');

INSERT INTO `genders`(`name`) VALUES ('Male');
INSERT INTO `genders`(`name`) VALUES ('Female');
INSERT INTO `genders`(`name`) VALUES ('Other');

INSERT INTO `courses`(`name`) VALUES ('PHP');
INSERT INTO `courses`(`name`) VALUES ('JS');
INSERT INTO `courses`(`name`) VALUES ('Java');
INSERT INTO `courses`(`name`) VALUES ('C++');
INSERT INTO `courses`(`name`) VALUES ('Python');

-- Select --
SELECT * FROM students;
SELECT `name` FROM genders;
SELECT * FROM courses;

-- Update --
UPDATE `students` SET `name` = 'Thiri May' WHERE `id` = 1

-- Delete --
DELETE FROM `students` WHERE `id` = 1