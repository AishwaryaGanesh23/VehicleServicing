package servicetesting;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.Alert;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import io.cucumber.java.en.Given;
import io.cucumber.java.en.Then;
import io.cucumber.java.en.When;

public class servicesTest {
	public WebDriver driver;
		
	@Given("Browser is open on website")
	public void browser_is_open_on_website() {
		System.setProperty("webdriver.chrome.driver", "F:\\java packages\\selenium\\chromedriver.exe");
	    driver = new ChromeDriver();
	    driver.manage().window().maximize();
	    driver.get("http://localhost/Servicing");
	}

	@Given("Employee is logged in")
	public void employee_is_logged_in() {
		driver.findElement(By.id("loginEmail")).sendKeys("den@gmail.com");
		driver.findElement(By.id("loginPassword")).sendKeys("denbear");
		try {
			TimeUnit.SECONDS.sleep(1);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		driver.findElement(By.id("loginButton")).click();
	}

	@Given("Employee clicks on Services in the navbar")
	public void employee_clicks_on_services_in_the_navbar() {
		driver.findElement(By.id("nav-services")).click();
		try {
			TimeUnit.SECONDS.sleep(1);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	//add services
	@When("Employee clicks on Add service button")
	public void employee_clicks_on_add_service_button() {
		try {
			TimeUnit.SECONDS.sleep(1);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		driver.findElement(By.id("add_service")).click();
		
	}

	@When("Employee Provides Service details")
	public void employee_provides_service_details() {
		driver.findElement(By.id("service_name")).sendKeys("Change Light");
		driver.findElement(By.id("service_price")).sendKeys("500");
		try {
			TimeUnit.SECONDS.sleep(1);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	@When("Employee submits")
	public void employee_submits() {
		driver.findElement(By.id("submit")).click();
	}

	@Then("New service is listed")
	public void new_service_is_listed() {
		WebDriverWait wait = new WebDriverWait(driver, 15);
		Alert alert = wait.until(ExpectedConditions.alertIsPresent());
		alert.accept();
	}
	
	
	//change service price
	@When("Employee clicks on Any change service price button")
	public void employee_clicks_on_any_change_service_price_button() {
		driver.findElement(By.xpath("//button[@id='change_button' and @value='4']")).click();
	}

	@When("Employee Provides new price")
	public void employee_provides_new_price() {
		try {
			TimeUnit.SECONDS.sleep(1);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		driver.findElement(By.id("pricechange")).sendKeys("250");
		driver.findElement(By.id("changeButton")).click();
	}

	@Then("Service price is changed")
	public void service_price_is_changed() {
		WebDriverWait wait = new WebDriverWait(driver, 15);
		Alert alert = wait.until(ExpectedConditions.alertIsPresent());
		
		alert.accept();
	}
	
	
	
	//cancel service
	@When("Employee clicks on Cancel Service price button")
	public void employee_clicks_on_cancel_service_price_button() {
		driver.findElement(By.xpath("//button[@id='cancelservice_button' and @value='4']")).click();
	}

	@When("Employee Confirms")
	public void employee_confirms() {
		WebDriverWait wait = new WebDriverWait(driver, 15);
		Alert alert = wait.until(ExpectedConditions.alertIsPresent());
		
		alert.accept();
	}

	@Then("Service is cancelled")
	public void service_is_cancelled() {
		try {
			TimeUnit.SECONDS.sleep(1);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		WebDriverWait wait = new WebDriverWait(driver, 15);
		Alert alert = wait.until(ExpectedConditions.alertIsPresent());
		alert.accept();
	}
}
