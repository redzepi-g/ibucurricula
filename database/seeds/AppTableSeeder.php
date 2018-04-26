<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //add Department
        DB::table('departments')->insert([
            [
            'name' => 'Computer Engineering',
            'shortname' => 'ce'
            ],

            [
                'name' => 'Information Technology',
                'shortname' => 'it'
            ],

            [
                'name' => 'Electrical Engineering',
                'shortname' => 'ee'
            ]]);
        
        //add courses
        DB::table('courses')->insert([
            [
                'code' => 'ENG 101',
                'name' => 'English Language I',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'CE 101',
                'name' => 'Computer Skills',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'PR 101',
                'name' => 'Communication Skills',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'MATH 101',
                'name' => 'Mathematics I',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'PHYS 101',
                'name' => 'Physics I',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'TUR 101',
                'name' => 'Elective Course at University level 1(Turkish Language I)',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'MK 101',
                'name' => 'Elective Course at University level 1(Macedonian Language I)',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'ENG 102',
                'name' => 'English Language II',
                'weeklyhours' => '2+1',
                'department_id' => '1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'IE 101',
                'name' => 'Introduction to Engineering',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'CE 102',
                'name' => 'Introduction to Programming',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'MATH 102',
                'name' => 'Mathematics II',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'PHYS 102',
                'name' => 'Physics II',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'MK 102',
                'name' => 'Elective course at University level 2 Macedonian Language II',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'TUR 102',
                'name' => 'Elective course at University level 2 Turkish Language II',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '1'
            ],
            [
                'code' => 'MATH 204',
                'name' => 'Discrete Mathematics',
                'weeklyhours' => '2+1',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'MATH 201',
                'name' => 'Linear Algebra',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'EE 202',
                'name' => 'Circuit Theory I',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'CE 201',
                'name' => 'Advanced Programming',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'ARCH 204',
                'name' => 'Elective course at Faculty level 1 Technical Drawing for Engineers',
                'weeklyhours' => '0+2',
                'ects' => '4',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'IE 206',
                'name' => 'Elective course at University level 2 Problem Solving Strategies',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'IE 206',
                'name' => 'Elective course at University level 2 Problem Solving Strategies',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'CE 202',
                'name' => 'Algorithms',
                'weeklyhours' => '2+1',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'MATH 202',
                'name' => 'Differential Equations',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'STA 201',
                'name' => 'Probability and Statistics',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'MATH 203',
                'name' => 'Mathematical Modeling',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'CE 203',
                'name' => 'Elective course at Faculty level 2 Computer Architecture',
                'weeklyhours' => '2+1',
                'ects' => '4',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'MAN 212',
                'name' => 'Elective course at University level 4 Enterpreneurship',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '2'
            ],
            [
                'code' => 'CE 301',
                'name' => 'Object Oriented Programming',
                'weeklyhours' => '2+2',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'CE 302',
                'name' => 'Data Structures',
                'weeklyhours' => '2+1',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'IE 303',
                'name' => 'Introduction to Optimization Methods',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'IE 304',
                'name' => 'Elective course at Faculty level 3 Systems Modeling',
                'weeklyhours' => '0+2',
                'ects' => '4',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'CE 303',
                'name' => 'Elective course at University level 4 Information System Design',
                'weeklyhours' => '2+1',
                'ects' => '4',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'BA 306',
                'name' => 'Elective course at University level 5 Law and Ethics',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'CE 304',
                'name' => 'Operating Systems',
                'weeklyhours' => '2+2',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'CE 305',
                'name' => 'Database Design and Management',
                'weeklyhours' => '2+2',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'RMNS 307',
                'name' => 'Research methods in Natural Sciences',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'CE 307',
                'name' => 'Elective course at Faculty level 5 Computer Graphics',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'CE 308',
                'name' => 'Elective course at Faculty level 6 Data Mining',
                'weeklyhours' => '2+9',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'CE 399',
                'name' => 'Internship',
                'weeklyhours' => '0+0',
                'ects' => '4',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '3'
            ],
            [
                'code' => 'CE 401',
                'name' => 'Data Communications and Networks',
                'weeklyhours' => '2+2',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 409',
                'name' => 'Elective course at Faculty level 7 Formal Languages and Automata',
                'weeklyhours' => '2+0',
                'ects' => '4',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 408',
                'name' => 'Elective course at Faculty level 8 Artificial Neural Networks',
                'weeklyhours' => '2+0',
                'ects' => '4',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 414',
                'name' => 'Elective course at Faculty level 9 Visual Programming',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 406',
                'name' => 'Elective course at Faculty level 10 Multimedia Web Design',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 490',
                'name' => 'Project I',
                'weeklyhours' => '0+6',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'fall',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 402',
                'name' => 'Telecommunications',
                'weeklyhours' => '2+2',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 405',
                'name' => 'Elective course at Faculty level 7 Wireless Information Networks',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 413',
                'name' => 'Elective course at Faculty level 8 Human Computer Interfaces',
                'weeklyhours' => '2+1',
                'ects' => '5',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 407',
                'name' => 'Elective course at Faculty level 9 Software Engineering',
                'weeklyhours' => '2+1',
                'ects' => '4',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '4'
            ],
            [
                'code' => 'CE 416',
                'name' => 'Elective course at Faculty level 10 Introduction to Robotics',
                'weeklyhours' => '2+0',
                'ects' => '4',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '4'
            ],

            [
                'code' => 'CE 499',
                'name' => 'Project II',
                'weeklyhours' => '0+6',
                'ects' => '6',
                'students' => '0',
                'comment' => 'No comment given yet.',
                'semester' => 'spring',
                'department_id' => '1',
                'year' => '4'
            ]]);

        //add professors
        DB::table('professors')->insert([
            [
                'name' => 'Asst. Prof. I. Miftari'
            ],
            [
                'name' => 'Assoc. Prof. Aleksandar Anastasovski'
            ],
            [
                'name' => 'Asst. Prof. Dr. Sanja Velickovski'
            ],
            [
                'name' => 'Prof. Dr. I. Kocayusufoglu'
            ],
            [
                'name' => 'Assoc. Prof. H. Kamberaj'
            ],
            [
                'name' => 'Prof. K. Koksal'
            ],
            [
                'name' => 'Prof. S. G. Madzova'
            ],
            [
                'name' => 'Asst. Prof. Dr. Igballe Miftari'
            ],
            [
                'name' => 'Assoc. Prof. Dr. Haidar Sharif'
            ],
            [
                'name' => 'Asst. Prof. Miroslav Kotevski'
            ],
            [
                'name' => 'Assoc. Prof. Aleksandra P. Kujundziski'
            ],
            [
                'name' => 'Assoc. Prof. Dr. Natasha Kraleva'
            ],
            [
                'name' => 'Asst. Prof. Dr. Festim Halili'
            ],
            [
                'name' => 'Asst. Prof. Mile Mircevski'
            ],
            [
                'name' => 'Assoc. Prof. Dr. B. Demiri'
            ],
            [
                'name' => 'Prof. Dr. Andrej Stefanov'
            ],
            [
                'name' => 'Mentorship (FENG staff)'
            ]]);
        
        //add assistants
        DB::table('assistants')->insert([
            [
                'name' => 'Asst. S. Ismaili'
            ],
            [
                'name' => 'Asst. F. Kamberi'
            ],
            [
                'name' => 'Asst. Dr. D. Leshkovski'
            ],
            [
                'name' => 'Asst. B. Karapejovski'
            ],
            [
                'name' => 'Asst. Emin Durmishi'
            ],
            [
                'name' => 'Asst. Neslihan Ademi'
            ],
            [
                'name' => 'Asst. Skofiar Kamberi'
            ],
            [
                'name' => 'Asst. Tina Gegovska'
            ]]);
    }
}
