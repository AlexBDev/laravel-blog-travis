Feature: Task
    We are able to do CRUD action on task

    Scenario: I can got to task index
        Given I am on "/task"
        Then I should see "Task"

    Scenario: I can go to create task from index
        Given I am on "/task"
        And I follow "Add New Task"
        Then I should see "Create New Task"

    Scenario: I can create a new task
        Given I am on "/task/create"
        And I fill in "content" with "Toto"