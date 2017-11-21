Feature: Tasks manager

  Scenario: Go to the Add new tasks page
    Given I am on "/task"
    Then the response status code should be 200
    And I follow "Add New Task"
    Then I should be on "/task/create"

  Scenario: Create new task done
    Given I am on "/task/create"
    When I fill in "content" with "Ceci est une tâche faite"
    And I select "1" from "is_done"
    And I press "Create"
    Then Save the task from filling content with "Ceci est une tâche faite" and filling is_done with "true"
    And I should be on "/task"

  Scenario: Create new task undone
    Given I am on "/task/create"
    When I fill in "content" with "Ceci est une tâche à faire !"
    And I select "0" from "is_done"
    And I press "Create"
    Then Save the task from filling content with "Ceci est une tâche à faire !" and filling is_done with "false"
    And I should be on "/task"

#  Scenario: Go to the Edit task page
#    Given I am on the task page list
#    And the task list is not empty
#    When I click the Edit button of a task
#    Then Go to the Task Edit page
#
#  Scenario: Edit task
#    Given I am on the Task Edit page
#    When I click the Update button
#    And I enter the content of the task
#    Then Save the task
#    And to the Task list page
#
#  Scenario: Go to the View task page
#    Given I am on the task page list
#    And the task list is not empty
#    When I click the View button of a task
#    Then Go to the Task View page
#
#  Scenario: View task
#    Given I am on the Task View page
#    Then Show the id, the content and if the task is done