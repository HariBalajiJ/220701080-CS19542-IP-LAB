import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/StudentSuggestionServlet")
public class StudentSuggestionServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;

    // Sample student names array
    private String[] studentNames = {
        "Dishanth T", "Divya Sundhari S M", "Divya Suresh", "Divyashree S", "Eniyan P",
        "Espin Shalo S P", "Geetha R", "Giridhar M", "Gopikrishnan R", "Gopinath R",
        "Goutham A K", "Guhanraj P", "Hareesh S S", "Hari Balaji J C", "Hariesh A CIWGC",
        "Hariharaviswanathan P", "Harine M", "Harini A", "Harini S", "Haripriya P",
        "Harish Ragavendar S", "Harshini Akshaya A S", "Harshini P", "Helina Sergius D",
        "Hema S", "Hindusha K", "Ishant R", "Jagadeesh Baskar", "Jaganaath",
        "Jamsith Asslam J", "Janani J", "Janani P K", "Jaya Shivaani B M", "Jayajothi Kumar",
        "Jayakanth S", "Jayanee Poobalarayan J", "Jayaprakash V", "Jayashree K",
        "Jayen Senthilkumar", "Jerom Santhiyagu A", "Jeyasri P R", "Jitheeswaran V",
        "Joderick Sherwin J", "Joel Sundarsingh A", "John Allan J", "John Prathap Singh S",
        "Jyothi Sakthi H", "Kaaviya G", "Kailaash B", "Kalaiselvi S", "Kamal J R",
        "Kamali K A", "Karthiga R", "Karumury Naga Madhava Nikhil", "Kavibalan P",
        "Kavin A", "Keerthana M G", "Keerthana S", "Keerthiga P", "Keerthika B",
        "Keerthika S", "Keerthivasan S", "Kesavan M", "Kharthik J", "Kiruthhik A S",
        "Kiruthiga M", "Aathithya S K", "Akash M", "Balamurugan M", "Manoj Kumar J"
    };

    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String input = request.getParameter("name");
        response.setContentType("application/json");
        PrintWriter out = response.getWriter();
        
        // Filter student names based on input
        StringBuilder jsonResponse = new StringBuilder("[");
        boolean first = true;
        
        for (String name : studentNames) {
            if (name.toLowerCase().startsWith(input.toLowerCase())) {
                if (!first) {
                    jsonResponse.append(",");
                }
                jsonResponse.append("\"").append(name).append("\"");
                first = false;
            }
        }
        jsonResponse.append("]");
        
        out.print(jsonResponse.toString());
        out.flush();
    }
}
