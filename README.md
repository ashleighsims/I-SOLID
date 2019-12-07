# SOLID Principles - I

_**Note: The code in this repository is example code.**_

The 'I' in SOLID is for Interface Segregation Principle. Sounds scary but its pretty simple to understand.
The core of this principle is that a class should not be forced to implement an interface which it does'nt use.

Essentially we want to be breaking interfaces down into smaller and more concise sets of methods which can be implemented by classes that need only the specific functionality and not implementing methods they don't need.

## Interface Segregation Violation

Looking in the directory `app/InterfaceSegregationPrincipleViolation` you will find the `Worker` interface this contains many methods which must be implemented by all that implement the interface.

Not all of those methods are applicable to each type of worker. That means that the classes implementing the interface are having to implement methods they don't need.

This is a violation of the Interface Segregation Principle.

## Interface Segregation - Worked Example

From the violation above in the `app/InterfaceSegregationPrinciple` you will find the worked example of the violation previously discussed.

The original interface has been broken down into several smaller ones which are more concise and make more sense. Remember to use some common sense when breaking the interfaces down. Their is no limit to the number of interfaces a class can implement however don't go overboard!

## Useful resources

- https://codeburst.io/the-interface-segregation-principle-4c712a9a78c4
- https://laracasts.com/series/solid-principles-in-php/episodes/4
- https://medium.com/prod-io/solid-principles-takeaways-ec0825a07247
- https://www.youtube.com/watch?v=APxoK1qbH4w&list=PLrIm-p2rpV0EMU_OsbH8RekBNp9buhsr-&index=4


