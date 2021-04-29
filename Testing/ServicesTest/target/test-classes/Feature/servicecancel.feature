Feature: Cancel Service 
	Scenario Outline: Cancel Service
	Given Browser is open on website 
	And Employee is logged in
	And Employee clicks on Services in the navbar
	When Employee clicks on Cancel Service price button
	And Employee Confirms
	Then Service is cancelled