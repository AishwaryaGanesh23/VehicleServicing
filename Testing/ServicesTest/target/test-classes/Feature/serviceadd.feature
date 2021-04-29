Feature: List Service
	Scenario Outline: List Services
	Given Browser is open on website 
	And Employee is logged in
	And Employee clicks on Services in the navbar
	When Employee clicks on Add service button
	And Employee Provides Service details
	And Employee submits
	Then New service is listed
	