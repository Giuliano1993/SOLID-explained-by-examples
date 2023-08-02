## S - Single-Responsibility Principle

The Single-Responsibility Principle (SRP) is perhaps the most well-known among the SOLID principles, but it is also the most frequently misunderstood or at least misleading. This is because it is often interpreted as "one component (or one class) should have only one reason to change." While the end result of applying this principle is more or less the same, it's important to understand its true meaning.

Within the context of this principle, "Responsibility" refers to a "single, cohesive task." So, according to this principle, a class should have only one reason to change; otherwise, it violates the SRP.

This kind of violation can easily lead to fragile code because if there are multiple reasons to modify a component, it becomes more likely to introduce bugs. And when a bug occurs, it can break the entire component, even the parts not directly related to the code where the error originated.

To see an example of a class that violates the SRP, take a look at the [first sample code](./SRP.php). We have a PHP class `User` that collects and manages all the properties of the user, and it also has a method to save the model in the database.

This class can change both when we add additional methods and properties that define the `User`, and when we modify the way we interact with the database. If an error occurs in either part, it could break the entire `User` class.

To address this problem, we can split the code into two parts. [The first part](./SRP2.php) will be the `User` class, which contains all the properties and methods describing the user. [The second part](./SRP3.php) will be the `UserRepository`, class, which handles the interactions of the `User` class with the database.

By organizing the code this way, each of the two classes will have its own single reason to change (a modification to the model or a modification to the database interactions), and we won't risk encountering fragility on this front.
