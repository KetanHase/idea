1. Write a Java Program to implement 1/O Decorator for converting uppercase letters to
lower case letters.
import java.io.*;
public class LowercaseDecorator extends FilterReader {
public LowercaseDecorator(Reader in) {
super(in);
}
@Override
public int read() throws IOException {
int c = super.read();
return (c == -1) ? c : Character.toLowerCase((char) c);
}
@Override
public int read(char[] cbuf, int off, int len) throws IOException {
int numCharsRead = super.read(cbuf, off, len);
for (int i = off; i < off + numCharsRead; i++) {
cbuf[i] = Character.toLowerCase(cbuf[i]);
}
return numCharsRead;
}
public static void main(String[] args) throws IOException {
StringReader sr = new StringReader("HELLO WORLD");
LowercaseDecorator lsd = new LowercaseDecorator(sr);
int c;
while ((c = lsd.read()) != -1) {
System.out.print((char) c);
}
}
}
