 ## O - Open-Closed Principle

The Open-Closed Principle indicates how to organize our code to allow our application to grow while maintaining stable and organized code. Let's see what it says:

_Software entities ( classes, modules, functions ) should be open for extension, but closed for modification._

What does this mean? It means that we should design our code (classes, components, functions, etc.) in a way that when we need to add a new feature to our application, we can do it by extending the existing modules, rather than modifying the existing ones that are already functional.

Let's try to understand it better. Let's suppose we are developing an application that needs to display information about multimedia contents. Knowing that we currently have only `Movie` and `TvShows`, we write the code you see in [the first code snippet](./OCP.php), with a function that renders information for each content. However, when we are asked to implement "Songs" as well, we would be forced to modify this code. We realize that adding any new content type will cause this `if` (or `switch`) to grow, making it less maintainable over time ( You can check [the second example](./OCP2.php)).

Furthermore, in a real-world application, the rendering of information would appear with slight variations in various parts of the application. This would force us to modify and check all occurrences whenever we add a new content type, making the code fragile.

So, how can we solve this issue? The solution lies in working with abstractions. In the case of PHP, which we are working with, what we need is an `Interface`. This is because an `Interface` defines a set of methods that must be implemented by the classes that use it, providing a blueprint to follow. We can then achieve the code shown [here](./OCP3.php) 😎.

Using the `Media` interface, we define the methods that each implementing class must develop. This way, even when we add other types of multimedia content, the `renderInformations()` function will no longer be modified; we will simply create a new class that implements the `Media` interface.

A small note regarding this principle: A significant mistake one could make is trying to abstract everything to close everything from any change. This is not feasible and would essentially lead to development stagnation. It's better to imagine plausible changes and prepare for those, while also being open to unexpected ones when they occur. We are developers, not fortune-tellers, and pragmatism should always guide our work.
