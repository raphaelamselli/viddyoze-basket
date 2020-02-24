# Basket

Basket is an implementation of a shopping basket written in PHP 7.
Features include:
 - The ability to define delivery charges based on the cost of the basket
 - The ability to define Special Promotions that can be applied to the basket 

### Pre-requisite

- Docker
- Make

### Installation

1. Clone this repository.
2. To build the Docker image, use the makefile provided and run
```make build```

### Usage

#### Running the first test basket
```
make run-basket1
```
#### Running the second test basket
```
make run-basket2
```
#### Running the third test basket
```
make run-basket3
```
#### Running the fourth test basket
```
make run-basket4
```

# Scope for improvement

Although all the required functionalities have been built, I feel like there is some scope for improvement: 
- This basket has been designed to be used as a back-end library. It doesn't include any font end or command line utility. For instance, the library has the functionality to add products to the basket, but the application doesn't enable that.

_Symfony Command could be used to produce a command line interface._

_Bootstrap could also be used to create a web interface_

- Furthermore, the basket isn't currently persisted or an existing basket cannot be retrieved. In the stateless world of http this would need to be improved. This means being able to identify users and track their journey.

- Finally, some of the functionalities should be exposed to be used as APIs rather than library functions. This would allow for the separation of functionalities into services. 
