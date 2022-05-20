## JSON to Plist

This application converts data between the JSON and Plist formats. 

To test the website with Docker locally, run:

```
docker run -p 8080:80 $(docker build -q .)
```

Then access it from: http://127.0.0.1:8080/

### Acknowledgement

This application uses an early version of the [CFPropertyList](https://github.com/TECLIB/CFPropertyList) library. 