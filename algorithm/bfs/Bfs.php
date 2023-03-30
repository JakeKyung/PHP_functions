<?php
/**
 * Create by Jake 2023/03/13.
 * BFS (Breadth First Search) - 너비 우선 탐색
 */

class Graph {
    // 노드와 연결된 간선들의 리스트
    public $adjList = array();

    // 노드와 방문 여부를 저장할 배열
    public $visited = array();

    // 노드를 추가하는 메서드
    public function addNode($node) {
        $this->adjList[$node] = array();
        $this->visited[$node] = false;
    }

    // 간선을 추가하는 메서드
    public function addEdge($node1, $node2) {
        // 무방향 그래프이므로 양방향으로 추가
        array_push($this->adjList[$node1], $node2);
        array_push($this->adjList[$node2], $node1);
    }

    // BFS 탐색 메서드
    public function bfs($start) {
        // 시작 노드를 큐에 삽입하고 방문 처리
        $queue = array();
        array_push($queue, $start);
        $this->visited[$start] = true;

        // 큐가 빌 때까지 반복
        while (!empty($queue)) {
            // 큐에서 노드를 하나 꺼내서 출력
            $node = array_shift($queue);
            echo $node . " ";

            // 인접한 노드들에 대해 방문하지 않은 것을 큐에 삽입하고 방문 처리
            foreach ($this->adjList[$node] as $adjNode) {
                if (!$this->visited[$adjNode]) {
                    array_push($queue, $adjNode);
                    $this->visited[$adjNode] = true;
                }
            }
        }
    }
}

// 그래프 생성 및 노드와 간선 추가
$graph = new Graph();
$graph->addNode('A');
$graph->addNode('B');
$graph->addNode('C');
$graph->addNode('D');
$graph->addNode('E');
$graph->addNode('F');
$graph->addEdge('A', 'B');
$graph->addEdge('A', 'C');
$graph->addEdge('B', 'D');
$graph->addEdge('B', 'E');
$graph->addEdge('C', 'F');

// BFS 탐색 수행
echo "BFS 탐색 결과: ";
$graph->bfs('A');

?>





