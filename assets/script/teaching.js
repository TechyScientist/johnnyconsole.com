var selected = 0;

const courseCodes = [
    "PHYS 1006",
    "PHYS 1007",
    "COSC 1047",
    "COSC 2006",
    "MATH 2056",
    "COSC 2406",
    "COSC 2956",
    "COSC 3596",
    "COSC 4086",
    "COSC 4087",
    "COSC 4235",
    "COSC 4596"
]

const courseNames = [
    "Introductory Physics I",
    "Introductory Physics II",
    "Introduction to Computer Science II",
    "Data Structures I",
    "Discrete Mathematics II",
    "Assembly Language Programming",
    "Internet Tools",
    "Mobile Application Development I",
    "Fourth Year Project I",
    "Fourth Year Project II",
    "Thesis in Computer Science",
    "Mobile Application Development II"
];

const calendarDescriptions = [
    "This course is the first of two courses that provide the student with a thorough understanding of the basic concepts of physics. Topics covered include kinematics, dynamics, work, energy and momentum, equilibrium and fluids, waves and sound, temperature, heat, and thermodynamics. The theoretical concepts are augmented by weekly laboratory work and assignments.",
    "This is an introductory Physics course for students who have completed a 4U Physics course or a university physics course with mechanics. A knowledge of mechanics, vectors, and energy is assumed. The topics covered are: Geometrical Optics, Electricity and Magnetism and Modern Physics.",
    "This course takes a software engineering approach to programming in the large, with particular emphasis on modularity, abstract data types, program specification, testing, documentation, and maintenance. Students will develop and document software with reusable software libraries.",
    "An introduction to data structures and their associated algorithms. Pointers and dynamic memory. Treatment of stacks, queues, and linked lists. Searching and sorting algorithms. Analysis of time and space requirements.",
    "This course will cover the following topics: countability of sets; first order logic; algebra of relations; graph theory including path problems, chromatic number, trees, planarity, directed graphs and directed trees; recurrence relations; O (f), o (f), and ~ (f) notations.",
    "This is an introduction to basic computer organization and instruction set architecture. Topics considered include: the instruction execution cycle; an overview of the assembly process; data representation; addressing modes, arrays, and strings; translation of high-level language control structures; procedures, parameter passing, and recursion; macros and conditional assembly; interrupts and input/output; interfacing to high level languages; floating point process or architecture and instructions code; code optimization techniques.",
    "Various internet tools and services are examined. These include advanced editors, Java, JavaScript, web browsers, ftp, and the creation and maintenance of web pages and web sites. The course emphasizes the integration of these tools into a programming environment.",
    "This course introduces the student to one of the major Mobile Computing platforms and develops their ability to write software applications for the platform. The student will learn to use the application development software for the platform and study the structure of the operating system and the application programs. They will learn to write programs that employ techniques to utilize complex User Interfaces, animation and graphics, data storage and retrieval, text input and output, network services, and platform hardware such as the camera and sensors. The Android operating system will form the basis for this course.",
    "This course will be composed of a written report on some approved topic of research in the field of Computer Science, or an approved comprehensive software and/or hardware project together with a report documenting the project and related research - followed by a short public presentation of the research/project. The content of this project should not overlap with other projects the student has completed in other courses. Group projects are allowed with prior departmental consent. Departmental approval is required prior to registration and students need to present a proposal at least 20 days prior to approval.",
    "A written report on some approved topic of research in the field of Computer Science, or an approved comprehensive software and/or hardware project together with a report documenting the project and related research - followed by a short public presentation of the research/project. The content of this project should not overlap with other projects the student has completed in other courses. Group projects are allowed with prior departmental consent. Departmental approval is required prior to registration and students need to present a proposal at least 20 days prior to approval.",
    "This course consists of a project in computer science chosen in consultation with, and supervised by, a member of the department. This course is only open to students enrolled in the fourth year of the Specialized program in Computer Science.",
    "This course extends the knowledge the student gained in COSC 3596 - Mobile Application Development I to two of the more popular of the other operating systems in the field. The course will focus on the development of applications that run on the Microsoft Surface tablet and Windows 8 computers and devices as well as devices that run Apple's iOS operating system such as the iPad and iPhone."
];

const teachingCapacities = [
    "Teaching Assistant, Lab Instructor",
    "Teaching Assistant, Lab Instructor",
    "Teaching Assistant, Lab Instructor",
    "Teaching Assistant, Lab Instructor, Lecture Instructor",
    "Teaching Assistant",
    "Teaching Assistant, Lab Instructor, Lecture Instructor",
    "Lecture Instructor",
    "Lecture Instructor",
    "Project Supervisor",
    "Project Supervisor",
    "Thesis Supervisor",
    "Lecture Instructor",
];

document.addEventListener("DOMContentLoaded", () => {
    const classButtons = document.getElementsByClassName("classBtn");
    const infoCol = document.getElementById("infoCol");

    for(let i = 0; i < classButtons.length; i++) {
        classButtons[i].addEventListener("click", () => {
            infoCol.innerHTML = `<strong>${courseCodes[i]}: ${courseNames[i]}</strong><br/>${calendarDescriptions[i]}<br/><br/>I have taught this course in the following capacities: <strong>${teachingCapacities[i]}</strong>`
            classButtons[selected].classList.toggle("selected");
            classButtons[i].classList.toggle("selected");
            selected = i;
        });
    }

    classButtons[selected].dispatchEvent(new Event("click"));
});