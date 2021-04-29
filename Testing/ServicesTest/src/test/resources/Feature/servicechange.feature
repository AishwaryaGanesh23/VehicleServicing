Feature: Change Service
	Scenario Outline: Change Service price
	Given Browser is open on website 
	And Employee is logged in
	And Employee clicks on Services in the navbar
	When Employee clicks on Any change service price button
	And Employee Provides new price
	Then Service price is changed
