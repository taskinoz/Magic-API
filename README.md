# Magic API

This API gives you Harry Potter spells! You can either get a random one or look up a specific spell. The magic happens with a PHP script that reads from a CSV file.

## Usage

The API has two endpoints:

Returns a random spell

```
http://api.taskinoz.com/magic/
```

Returns the description of a speciffied spell

```
http://api.taskinoz.com/magic/?spell=<spell name>
```

## Example

### Random spell

The response from the API will be plain text. Here is an example response for a random spell:

```
GET: http://api.taskinoz.com/magic/
```

```
Response: Accio
```

### Spell Description

The response from the API will be plain text. Here is an example response for a specific spell:

```
GET: http://api.taskinoz.com/magic/?spell=Accio
```

```
Response: Summons an object
```

## Dependencies

The PHP script used in this API has no external dependencies. It simply reads from a CSV file containing all the spells used in the Harry Potter series.

## How to run locally

To run the API locally, simply download the PHP script and the CSV file and run the script using a local PHP server. The script should be located in the root directory of the server.

```
php -S localhost:8000
```
