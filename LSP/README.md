## L - Liskov Substitution Principle
The Liskov Substitution Principle (LSP) can be expressed in multiple ways, with the simplest being:

_Subclasses must be substitutable for their base class._

This principle emphasizes the use of inheritance and polymorphism. Substitutability of a child class for a parent class occurs mainly when replacing the use of a parent class with that of a derived class at a certain point in the code, while the code's behavior remains valid. If not, it's a violation of the LSP. If a developer modifies the previously working code of the parent class to prevent behavior from becoming invalid, they would violate the Open-Closed Principle (OCP).

Essentially, a child class should extend the behaviors of the parent class rather than modify them. Otherwise, we risk violating both the LSP and the OCP. In other words, a violation of the Liskov Substitution Principle often conceals a violation of the Open-Closed Principle.

As always, let's proceed with an example, this time relying on a classic scenario that's very useful to understand this principle better.

Consider the two classes, "Rectangle" and "Square," in the first image. It might seem that "Square" is a subclass of "Rectangle," with the peculiarity of having all sides equal. Intuitively, we modified the "setWidth" and "setHeight" methods so that if one dimension is set, the other adjusts accordingly. Everything might seem to fit.

But what happens when, during testing, we pass an instance of "Square" instead of "Rectangle" to the "testArea()" function in the second image? We receive two different answers, highlighting that "Square" doesn't pass the test and isn't substitutable for "Rectangle" as expected. The Liskov Substitution Principle is violated.

From this, we can understand a few things. First, "Square" doesn't derive from "Rectangle." They share some aspects that could be included in a single abstraction, but one isn't derived from the other.

Second, violations of the Liskov Substitution Principle are detectable only when the fragility of our code becomes apparent. This type of fragility is tied to how we use the classes we write/have at our disposal. It might surface on the first day or never at all.