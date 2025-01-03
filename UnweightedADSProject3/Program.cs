class UnweightedGraph
{
    Dictionary<string, LinkedList<string>> adjacencyList;

    public UnweightedGraph()
    {
        adjacencyList = new Dictionary<string, LinkedList<string>>();
    }

    public void AddEdge(string src, string dest) //Src and dest for beginning and end
    {
        if (!adjacencyList.ContainsKey(src))
            adjacencyList[src] = new LinkedList<string>();
        if (!adjacencyList.ContainsKey(dest))
            adjacencyList[dest] = new LinkedList<string>();

        adjacencyList[src].AddLast(dest);
        adjacencyList[dest].AddLast(src);
    }

    public void PrintGraph()
    {
        Console.WriteLine("\nUnweighted Graph:");
        foreach (var node in adjacencyList)
        {
            Console.Write(node.Key);
            foreach (var neighbor in node.Value)
            {
                Console.Write($" --> {neighbor}");
            }
            Console.WriteLine();
        }
    }

    public Dictionary<string, double> ComputeInfluenceScores()
    {
        var influenceScores = new Dictionary<string, double>();
        int n = adjacencyList.Count; 

        foreach (var node in adjacencyList.Keys)
        {
            double totalDistance = ComputeTotalDistance(node);
            if (totalDistance > 0) // Avoids divide by zero 
            {
                influenceScores[node] = (n - 1) / totalDistance;
            }
            else
            {
                influenceScores[node] = 0; // If no reachable nodes, influence is 0
            }
        }

        return influenceScores;
    }

    // Compute total distance from the given node to all other nodes using BFS
    private double ComputeTotalDistance(string start)
    {
        var distances = new Dictionary<string, int>();
        var queue = new Queue<string>();
        queue.Enqueue(start);
        distances[start] = 0;

        while (queue.Count > 0)
        {
            var current = queue.Dequeue();

            foreach (var neighbor in adjacencyList[current])
            {
                if (!distances.ContainsKey(neighbor))
                {
                    distances[neighbor] = distances[current] + 1;
                    queue.Enqueue(neighbor);
                }
            }
        }

        // Calculate total distance to all reachable nodes
        double totalDistance = 0;
        foreach (var distance in distances.Values)
        {
            totalDistance += distance;
        }

        return totalDistance;
    }

    // Load graph from file
    public void LoadFromFile(string fileName)
    {
        foreach (var line in File.ReadLines(fileName))
        {
            var parts = line.Split(' ');
            string src = parts[0];
            string dest = parts[1];
            AddEdge(src, dest);
        }
    }
}

//Main Execution
class Program
{
    static void Main()
    {
        var graph = new UnweightedGraph(); 
        string fileName = "C:\\Users\\lewis\\Downloads\\Coding\\2024\\UnweightedADSProject3\\UnWeighted.txt";
        graph.LoadFromFile(fileName);
        graph.PrintGraph();

        var startTime = DateTime.Now;// Measure execution time (Done for feedback)


        // Compute and display influence scores
        var influenceScores = graph.ComputeInfluenceScores();

        var endTime = DateTime.Now;
        var executionTime = endTime - startTime;

        Console.WriteLine("\nInfluence Scores:");
        foreach (var (node, score) in influenceScores)
        {
            Console.WriteLine($"{node}: {score:F4}");
        }
        Console.WriteLine($"\nExecution Time: {executionTime.TotalMilliseconds} ms");
    }
}
