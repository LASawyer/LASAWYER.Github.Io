class WeightedGraph
{
    Dictionary<string, LinkedList<Tuple<string, int>>> adjacencyList;

    public WeightedGraph()
    {
        adjacencyList = new Dictionary<string, LinkedList<Tuple<string, int>>>();
    }

    public void AddEdge(string src, string dest, int weight) //Src and dest for beginning and end + Weight included as well 
    {
        if (!adjacencyList.ContainsKey(src))
            adjacencyList[src] = new LinkedList<Tuple<string, int>>();
        if (!adjacencyList.ContainsKey(dest))
            adjacencyList[dest] = new LinkedList<Tuple<string, int>>();

        adjacencyList[src].AddLast(new Tuple<string, int>(dest, weight));//Extra detail needed for weighted graph
        adjacencyList[dest].AddLast(new Tuple<string, int>(src, weight)); 
    }
    //Code above also means that the weight MUST be the last value in the .txt file

    public void PrintGraph()
    {
        Console.WriteLine("\nWeighted Graph:");
        foreach (var node in adjacencyList)
        {
            Console.Write(node.Key);
            foreach (var edge in node.Value)
            {
                Console.Write($" --{edge.Item2}--> {edge.Item1}");
            }
            Console.WriteLine();
        }
    }

    public Dictionary<string, double> ComputeInfluenceScores()
    {
        Dictionary<string, double> influenceScores = new Dictionary<string, double>();
        int totalNodes = adjacencyList.Count;

        foreach (var node in adjacencyList.Keys)
        {
            double totalDistance = ComputeTotalDistance(node);
            if (totalDistance > 0) // Avoids divide by zero 
            {
                influenceScores[node] = (totalNodes - 1) / totalDistance;
            }
            else
            {
                influenceScores[node] = 0; // If no reachable nodes, influence is 0
            }
        }

        return influenceScores;
    }

    // Compute total distance from the given node to all other nodes using Dijkstra's algorithm
    private double ComputeTotalDistance(string start)
    {
        var distances = new Dictionary<string, int>(); 
        var priorityQueue = new SortedSet<(int distance, string node)>(); 
        distances[start] = 0;
        priorityQueue.Add((0, start));

        while (priorityQueue.Count > 0)
        {
            var (currentDistance, currentNode) = priorityQueue.Min;
            priorityQueue.Remove(priorityQueue.Min);

            foreach (var neighbor in adjacencyList[currentNode])
            {
                string neighborNode = neighbor.Item1;
                int edgeWeight = neighbor.Item2;
                int newDistance = currentDistance + edgeWeight;

                if (!distances.ContainsKey(neighborNode) || newDistance < distances[neighborNode])
                {
                    if (distances.ContainsKey(neighborNode))
                        priorityQueue.Remove((distances[neighborNode], neighborNode));

                    distances[neighborNode] = newDistance;
                    priorityQueue.Add((newDistance, neighborNode));
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
            int weight = int.Parse(parts[2]);
            AddEdge(src, dest, weight);
        }
    }
}

//Main Execution
class Program
{
    static void Main()
    {
        var graph = new WeightedGraph(); 
        string fileName = "C:\\Users\\lewis\\Downloads\\Coding\\2024\\WeightedADSProject3\\WeightedGraph.txt";
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
