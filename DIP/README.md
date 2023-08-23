# D - Dependency Inversion Principle

The Dependency Inversion Principle tells us that:

_High-level modules should not depend on low-level modules. Both should depend on abstractions._

What do we mean by high-level and low-level modules? In short, high-level modules are classes closer to the presentation layer, dealing with logic closest to the end user. On the other hand, low-level modules are more distant from the user, generally classes and functions used by high-level modules to carry out their tasks.

So, what does this principle require concretely? 🤔

It requires not directly importing modules containing logic details into high-level modules, but interposing an abstraction between them. This provides greater stability to high-level modules and ensures proper adherence to the OCP in low-level modules (this strategy reverses the dependency direction of the low-level module, making it depend on the abstraction, hence the name of the principle).

As always, let's make everything clearer with an example:

In [this snippet](./DIP1.php), the CheckoutController, our high-level module, directly imports a hypothetical StripeProvider in the __construct() to handle payments in the Stripe checkout. This way, the CheckoutController, which sends information to the view, becomes entirely dependent and subject to any changes made to the StripeProvider. Moreover, what if we wanted to add PayPal as a payment method? We would need to add a new parameter and modify the existing code, breaking the OCP.

How to solve this issue?

It's enough to introduce an interface that acts as an intermediary between the CheckoutController and the StripeProvider, like you see [here](./DIP2.php). This way, the Controller will only need to call the methods provided by the Interface, regardless of how they are implemented. Additionally, we are free to have multiple provider classes, one for each payment method, implementing their respective logics without altering the previously functional code.

This approach respects both the DIP and the OCP, making the code stable and maintainable.

While it may seem counterintuitive at first glance, adhering to this principle allows for the stable construction of complex applications and is fundamental to the structure of many frameworks.