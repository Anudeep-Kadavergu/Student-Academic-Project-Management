# Student Academic Project Management
## Description
> * During project Development, forming of team and advancement for abstract submission and evaluation is the main problem. Each team have an Evaluator who suggest what are the changes needed and evaluate the projects frequently. Monitoring of activities in the project is an issue to be concerned about. To avoid these problems, we thought of a new application which can satisfy the participants by solving their issues and making their project submission and evaluation faster and secure.<br/>
> * So, we thought of an solution in form of application named- STUDENT ACADEMIC PROJECT  MANAGEMENT SYSTEM<br/>
> * In this teams are divided by algorithm based on GPA. Each team will be allocated an evaluator automatically to monitor their activities  in both online and offline modes. 
> * Each team will be provided with unique ID and password.The participants uploads their projects and abstracts which are monitored by the mentor, as such he can suggest the desired changes in the abstracts. In this we also have a facility of adding some specifications like Assignment submissions, quiz ,chat box between mentor and participants etc
## Development
Virtual Labs are implemented by following three module design. They are:
> Admin Module<br/>
> Faculty Module<br/>
> Student Module<br/>

Each module are independent of each other but shares common data between them(MySQL DB).
### Admin Module
> * Student Details Upload (Excel File)
> * Faculty Details Upload (Excel File)
> * Teams Generation (Algorithm)
> * Faculty Assign (Algorithm)
> * Adding, Deleting, Modifying Teams Info 

### Faculty Module
> * Project Schedule Update
> * Verify Documents
> * Assess Projects and Provide Status (Accepted, Rejeceted, Completed)
> * Evaluating Projects
> * Communicating with Students

  
### Student Module
> * Team Checkup
> * Documents Upload
> * Code Upload
> * Communicating with Faculty	

## Installation
> 1. Install XAMPP Server. 
> 2. Clone this Repo into htdocs folder in XAMPP application.
> 3. Start the XAMPP Server and open http://localhost/dashboard in browser.
> 4. Click on phpmyadmin , it takes to mysql server page.
> 5. Create project database and import the project.sql file which is in db folder into database
> 6. Setup is completed, Now open http://localhost/student-academic-project-management in browser
> 7. Enter usernames and passwords that were mentioned in datatables

## References
> * https://judge0.com => Thanks for the programming environment API

