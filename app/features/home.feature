Feature: Home
    The homepage must be up

    Scenario:
        Given I am on the homepage
        Then the response status code should be 200
        And I should see "Hello"
