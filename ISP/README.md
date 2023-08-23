## I - Interface Segregation Principle

The Interface Segregation Principle tells us that:

_Clients should not be forced to depend on interfaces they do not use._

Among all the SOLID principles, this is perhaps the most straightforward to both comprehend and apply. Essentially, what is conveyed is not to create "fat" interfaces, meaning interfaces with methods unrelated to all classes that will implement that same interface. Instead, it's preferable to have multiple interfaces, each with methods that are certainly needed for the classes that will implement them. This is also because we don't want to have to modify a class implementing an interface based on unused methods, nor make subsequent changes to accommodate requirements that aren't truly necessary.

Let's imagine we're developing a server manager, and we'll use the interface "Server" shown in the first image as an example. Not all server classes we create will require the methods related to MySql, as not all servers use it. However, if we create a class called SimpleServer that implements the Server interface, we'll get an error if we don't define all the methods described by the interface. And if I were to add additional methods or modify the descriptions provided in the interface (perhaps by adding parameters), I would be forced to make the same changes to the class, even if it doesn't use them.

We apply the Interface Segregation Principle by finding ourselves in the situation depicted in the other two images, having an interface with methods relevant to all servers and another containing methods needed only for those that use MySql.

Now we can create classes that implement one or both interfaces and keep the code more organized.